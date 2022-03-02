<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Lifestyle extends Component
{
    public function render()
    {
        return view('livewire.lifestyle')->layoutData([
            'title' => "Lifestyle - agile punks",
            'description' => "agile punks ist ein freies Netzwerk an Spezialisten und eine Gegenbewegung zu Agile Consulting, völlig überteuerten Tagessätzen, zu nichtssagenden Zertifizierungen und übertrieben esoterischen Herangehensweisen. Außerdem haben wir Hoodies!",
            'image' => asset('img/bg/lifestyle.jpg'),
        ]);
    }
}
