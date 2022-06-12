<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\JsonCache;

class Podcast extends Component
{
    use JsonCache;

    public function render()
    {
        $podcasts = $this->getJsonDecodedList(base_path('podcast-index.json'));
        $podcasts = $podcasts->reverse();
        return view('livewire.podcast', ['podcasts' => $podcasts])->layoutData([
            'title' => "ohne Punk und Koma - agile punks",
            'description' => "Der Podcast mit Domi und Ralph über Teamentwicklung und Arbeitskultur.",
            'image' => asset('img/bg/podcast.jpg'),
        ]);
    }
}
