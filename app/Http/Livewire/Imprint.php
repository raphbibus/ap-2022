<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Imprint extends Component
{
    public function render()
    {
        return view('livewire.imprint')->layoutData([
            'title' => "Impressum und Datenschutz - agile punks",
            'description' => "Impressum und Datenschutz, nicht mehr und nicht weniger.",
            'image' => asset('img/hoodie-0'.rand(1,6).'.jpg'),
        ]);
    }
}
