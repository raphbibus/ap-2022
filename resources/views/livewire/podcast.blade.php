<x-navigation>
    <div class="w-screen bg-podcast bg-cover bg-no-repeat bg-fixed bg-center">
        <div class="min-h-screen bg-gradient-to-r from-punk-pink via-transparent to-transparent basis-full z-10 mr-6 max-h-screen overflow-scroll">
            <div class="text-center my-12">
                <h1 class="font-display text-8xl text-punk-light">Ohne punk und koma</h1>
                <img alt="Ohne Punk und Koma Logo" class="rounded-xl object-contain h-96 w-3/4 2xl:w-1/2 bg-punk-gray/80 mx-auto shadow-xl my-8 p-8" src="{{ asset('img/podcast-logo.png') }}">
                <p class="text-5xl">der Podcast mit Domi und Ralph</p>
                <div class="w-3/4 2xl:w-1/2 bg-gradient-to-r from-punk-green/80 to-punk-violet/80 mx-auto rounded-xl my-8 p-8">
                    <p class="text-left text-3xl py-2">was euch erwartet:</p>
                    <ul class="text-left text-xl font-serif list-disc pl-4">
                        <li>Best Practices und Stories zu Teamentwicklung und Arbeitskultur.</li>
                        <li>Jede Folge 2 Geschichten: 1x von Arbeit, 1x privat.</li>
                        <li>30-40 Minuten pure Action, härter als Alarm für Cobra 11.</li>
                        <li>Kein Boomer-Mindset wie Pranz und Lecht.</li>
                    </ul>
                    <p class="text-left text-3xl py-2">Also los, Folgen sind hier.</p>
                    <svg class="fill-punk-light mx-auto mt-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 21l-12-18h24z"/></svg>
                </div>
                <div class="grid grid-cols-1 gap-4 my-12 text-left w-3/4 2xl:w-1/2 mx-auto">
                    @foreach ($podcasts as $key => $episode)
                        <div id="podcast_{{$key}}" class="p-8 bg-punk-gray/80 rounded-xl text-punk-dark">
{{--                            <img alt="Vorschaubild des Blogartikels {{ $episode->title }}" class="rounded-xl object-cover h-60 w-full shadow-xl" src="{{ asset($article->image) }}">--}}
                            <h2 class="text-5xl pb-4 text-punk-pink">{{ $key + 1 }}. {{ $episode->title }}</h2>
                            <p class="font-serif mb-6">{{ $episode->description }}</p>
                            <p>
                                <a class="bg-punk-dark text-punk-green p-2 rounded-xl mr-2" href="{{ $episode->links->spotify }}">Spotify</a>
                                <a class="bg-punk-red text-punk-light p-2 rounded-xl mr-2" href="{{ $episode->links->apple }}">Apple Music</a>
                                <a class="bg-punk-pink text-punk-light p-2 rounded-xl" href="{{ $episode->links->punks }}">Punks</a>
                            </p>
                            <p class="font-sans text-2xl mt-5">Episode vom {{ $episode->published_at }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-navigation>
