<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        $blogArticles = json_decode(file_get_contents(base_path('blog-index.json')));
        return view('livewire.blog', ['articles' => $blogArticles]);
    }
}
