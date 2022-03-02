<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home')->layoutData([
            'title' => "agil, weil's sonst niemand ist - agile punks",
            'description' => "Organisationsingenieure aus Leidenschaft. Antiberater aus Überzeugung. Dieser kleine Lichtblick im Sturm deiner Transformation.",
            'image' => asset('img/hoodie-0'.rand(1,6).'.jpg'),
        ]);
    }
}
