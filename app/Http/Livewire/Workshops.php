<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Workshops extends Component
{
    public function render()
    {
        return view('livewire.workshops')->layoutData([
            'title' => "Workshops - agile punks",
            'description' => "Buch uns, hab Spaß mit uns, sei produktiv mit uns.",
            'image' => asset('img/bg/workshops.jpg'),
        ]);
    }
}
