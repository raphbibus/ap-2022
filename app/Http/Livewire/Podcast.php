<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Podcast extends Component
{
    public function render()
    {
        $podcasts = json_decode(file_get_contents(base_path('podcast-index.json')));
        return view('livewire.podcast', ['podcasts' => $podcasts]);
    }
}
