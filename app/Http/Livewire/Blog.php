<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\JsonCache;

class Blog extends Component
{
    use JsonCache;

    public function render()
    {
        $blogArticles = $this->getJsonDecodedList(base_path('blog-index.json'));
        return view('livewire.blog', ['articles' => $blogArticles])->layoutData([
            'title' => "Blog - agile punks",
            'description' => "Der deutsche agile punks Blog. Regelmäßig neue Artikel zu den Themen agile Software-Entwicklung, Purpose, moderne Führung und Methoden der sinnvollen Zusammenarbeit.",
            'image' => asset('img/bg/blog.jpg'),
        ]);
    }
}
