<x-navigation>
    <div class="w-screen bg-podcast bg-cover bg-no-repeat bg-fixed bg-center">
        <div class="min-h-screen bg-gradient-to-r from-punk-pink via-transparent to-transparent basis-full z-10 mr-6 max-h-screen overflow-scroll">
            <div class="text-center my-12">
                <h1 class="font-display text-8xl text-punk-light">Ohne punk und koma</h1>
                <img alt="Ohne Punk und Koma Logo" class="rounded-xl object-contain h-96 w-1/2 bg-punk-gray/80 m-auto shadow-xl my-8 p-8" src="{{ asset('img/podcast-logo.png') }}">
                <p class="text-3xl">der Podcast mit Domi und Ralph</p>
                <div class="grid grid-cols-1 gap-4 my-12 text-left w-1/2 m-auto">
                    @foreach ($podcasts as $key => $episode)
                        <div class="p-8 bg-punk-gray/80 rounded-xl text-punk-dark">
{{--                            <img alt="Vorschaubild des Blogartikels {{ $episode->title }}" class="rounded-xl object-cover h-60 w-full shadow-xl" src="{{ asset($article->image) }}">--}}
                            <h2 class="text-5xl py-4 text-punk-pink">{{ $key + 1 }}. {{ $episode->title }}</h2>
                            <p class="font-serif mb-2">{{ $episode->description }}</p>
                            <p>
                                <a class="bg-punk-dark text-punk-green p-2 rounded-xl mr-2" href="{{ $episode->links->spotify }}">Spotify</a>
                                <a class="bg-punk-red text-punk-light p-2 rounded-xl mr-2" href="{{ $episode->links->apple }}">Apple Music</a>
                                <a class="bg-punk-pink text-punk-light p-2 rounded-xl" href="{{ $episode->links->punks }}">Punks</a>
                            </p>
                            <p class="font-sans text-2xl mt-2">Episode vom {{ $episode->published_at }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-navigation>
