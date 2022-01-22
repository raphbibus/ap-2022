<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class IndexBlogArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $indexedArticles = [];

        $blogArticles = array_diff(scandir(base_path('blog')),array('..', '.'));

        $blogIndex = fopen(base_path('blog-index.json'), "w") or die("Unable to open file!");

        foreach($blogArticles as $fileName) {
            $line = fgets(fopen(base_path('blog/'.$fileName), 'r'));
            $parsed = $this->parseArticleName($fileName);
            $indexedArticles[Str::slug($line)]['title'] = $this->getTitle($line);
            $indexedArticles[Str::slug($line)]['path'] = 'blog/'.$fileName;
            $indexedArticles[Str::slug($line)]['author'] = $parsed['author'];
            $indexedArticles[Str::slug($line)]['published_at'] = $parsed['published_at'];
            $indexedArticles[Str::slug($line)]['sharing'] = $this->getSharingUrl($line);
            $indexedArticles[Str::slug($line)]['image'] = $parsed['image'];
            $indexedArticles[Str::slug($line)]['sort_key'] = $parsed['sort_key'];
        }

        uasort($indexedArticles, function($a,$b) {
            //sort by date descending.
            return strcmp($b["sort_key"],$a["sort_key"]);
        });

        fwrite($blogIndex, json_encode($indexedArticles));
        fclose($blogIndex);
    }

    private function parseArticleName($fileName) {
        $arr = explode("-",$fileName);
        $parsed['author'] = config('punks.people.'.str_replace(".md","",$arr[3]));
        $dt = Carbon::create($arr[0], $arr[1], $arr[2]);
        $parsed['published_at'] = $dt->toFormattedDateString();
        $parsed['sort_key'] = $arr[0].$arr[1].$arr[2];
        $parsed['image'] = 'img/blog/'.str_replace(".md",".jpg",$fileName);
        return $parsed;
    }

    private function getSharingUrl($line) {
        $slug = Str::slug($line);
        $id = substr(md5($slug), -5);
        Cache::forever($id,$slug);
        $url = "/b/{$id}";
        return $url;
    }

    private function getTitle($line) {
        $line = str_replace("# ","",$line);
        $line = str_replace("\n","",$line);
        return $line;
    }

}
