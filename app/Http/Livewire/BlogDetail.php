<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Mail\Markdown;
use Illuminate\Support\Facades\Cache;

class BlogDetail extends Component
{

    private $articleMeta;
    private $articleText;

    public function mount($slug)
    {
        if(!Cache::has($slug)) {
            $blogArticles = json_decode(file_get_contents(base_path('blog-index.json')));
            $this->articleMeta = $blogArticles->$slug;
            $this->articleText = Markdown::parse(file_get_contents(base_path($this->articleMeta->path)));
            Cache::forever($slug,[
                'meta' => $this->articleMeta,
                'text' => $this->articleText
            ]);
        } else {
            $article = Cache::get($slug);
            $this->articleMeta = $article['meta'];
            $this->articleText = $article['text'];
        }
    }

    public function render()
    {
        return view('livewire.blog-detail', ['articleMeta' => $this->articleMeta, 'articleText' => $this->articleText])->layoutData([
            'title' => "{$this->articleMeta->title} - agile punks",
            'description' => "Blogpost von {$this->articleMeta->author->name}. Veröffentlicht am {$this->articleMeta->published_at}",
            'image' => $this->articleMeta->image,
        ]);
    }
}
