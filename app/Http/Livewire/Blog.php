<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        $blogArticles = json_decode(file_get_contents(base_path('blog-index.json')));
        return view('livewire.blog', ['articles' => $blogArticles])->layoutData([
            'title' => "Blog - agile punks",
            'description' => "Der deutsche agile punks Blog. Regelmäßig neue Artikel zu den Themen agile Software-Entwicklung, Purpose, moderne Führung und Methoden der sinnvollen Zusammenarbeit.",
            'image' => asset('img/bg/blog.jpg'),
        ]);
    }
}
