<x-navigation>
    <div class="w-screen xl:bg-podcast bg-cover bg-no-repeat bg-fixed bg-center bg-punk-violet dark:bg-darkpunk-violet">
        <div class="min-h-screen basis-full z-10 xl:mr-6 max-h-screen overflow-scroll pb-16 bg-gradient-to-r from-punk-pink via-transparent to-transparent dark:from-darkpunk-pink dark:via-transparent dark:to-transparent">
            <div class="text-center my-12">
                <h1 class="font-display text-5xl xl:text-8xl text-punk-light dark:text-darkpunk-light">Ohne punk und koma</h1>
                <img alt="Ohne Punk und Koma Logo" class="rounded-xl object-contain h-96 w-5/6 md:w-3/4 2xl:w-1/2 mx-auto shadow-xl my-8 p-4 xl:p-8 bg-punk-gray/80 dark:bg-darkpunk-gray/80" src="{{ asset('img/podcast-logo.webp') }}">
                <p class="text-5xl text-punk-light dark:text-darkpunk-light">der Podcast mit Domi und Ralph</p>
                <div class="w-5/6 md:w-3/4 2xl:w-1/2 mx-auto rounded-xl my-8 p-4 xl:p-8 bg-gradient-to-r from-punk-green/80 to-punk-violet/80 dark:from-darkpunk-green/80 dark:to-darkpunk-violet/80">
                    <p class="text-left text-2xl font-extrabold py-2 font-serif text-punk-light dark:text-darkpunk-light">Was euch erwartet:</p>
                    <ul class="text-left text-lg font-serif xl:list-disc xl:pl-4 text-punk-light dark:text-darkpunk-light">
                        <li>Best Practices und Stories zu Teamentwicklung und Arbeitskultur.</li>
                        <li>Jede Folge 2 Geschichten: 1x von Arbeit, 1x privat.</li>
                        <li>30-40 Minuten pure Action, härter als Alarm für Cobra 11.</li>
                        <li>Kein Boomer-Mindset wie Pranz und Lecht.</li>
                    </ul>
                    <p class="text-left text-2xl font-extrabold py-2 font-serif text-punk-light dark:text-darkpunk-light">Also los, Episoden sind hier.</p>
                    <svg class="mx-auto mt-2 fill-punk-light dark:fill-darkpunk-light" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 21l-12-18h24z"/></svg>
                </div>
                <div class="grid grid-cols-1 gap-4 my-12 text-left w-5/6 md:w-3/4 2xl:w-1/2 mx-auto">
                    @foreach ($podcasts as $key => $episode)
                        <div id="podcast_{{$key}}" class="p-4 xl:p-8 rounded-xl text-punk-dark bg-punk-gray/80 dark:text-darkpunk-light dark:bg-darkpunk-gray/80">
                            <h2 class="text-5xl pb-4 text-punk-pink dark:text-darkpunk-pink">{{ $key + 1 }}. {{ $episode->title }}</h2>
                            <h3 class="text-xl font-serif font-bold">{{ $episode->subtitle }}</h3>
                            <p class="font-serif text-lg font-bold my-1">Episode vom {{ $episode->published_at }}</p>
                            <p class="font-serif mb-6">{{ $episode->description }}</p>
                            <p>
                                @foreach($episode->links as $key => $value)
                                    @if($value != "")
                                        <a class="{{config('punks.podcast.colors.'.$key)}} p-2 rounded-xl mr-2 mt-2 inline-block" href="{{ $value }}">{{config('punks.podcast.channels.'.$key)}}</a>
                                    @else
                                        <span class="{{config('punks.podcast.colors.'.$key)}} p-2 rounded-xl mr-2 mt-2 inline-block">Kommt noch...</span>
                                    @endif
                                @endforeach
                            </p>
                            <p class="hidden">
                                <a class="bg-punk-dark text-punk-green dark:bg-darkpunk-dark dark:text-punk-green p-2 rounded-xl mr-2 mt-2 inline-block" href="{{ $episode->links->spotify }}">Spotify</a>
                                <a class="bg-punk-red text-punk-light dark:bg-darkpunk-red dark:text-darkpunk-light p-2 rounded-xl mr-2 mt-2 inline-block" href="{{ $episode->links->apple }}">Apple Music</a>
                                <a class="bg-punk-brown text-punk-light dark:bg-darkpunk-brown dark:text-darkpunk-light p-2 rounded-xl mr-2 mt-2 inline-block" href="{{ $episode->links->podcast }}">podcast.de</a>
                                <a class="bg-punk-dark text-punk-light dark:bg-darkpunk-dark dark:text-darkpunk-light p-2 rounded-xl mr-2 mt-2 inline-block" href="{{ $episode->links->deezer }}">Deezer</a>
                                <a class="bg-punk-blue text-punk-light dark:bg-darkpunk-blue dark:text-darkpunk-light p-2 rounded-xl mr-2 mt-2 inline-block" href="{{ $episode->links->amazon }}">Amazon</a>
                                <a class="bg-punk-light text-punk-brown dark:bg-darkpunk-light dark:text-punk-brown p-2 rounded-xl mr-2 mt-2 inline-block" href="{{ $episode->links->google }}">Google</a>
                                <a class="bg-punk-pink text-punk-dark dark:bg-darkpunk-pink dark:text-darkpunk-light p-2 rounded-xl mt-2 inline-block" href="{{ $episode->links->rss }}">RSS</a>
                            </p>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-navigation>
