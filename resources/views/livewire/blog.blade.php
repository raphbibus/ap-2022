<x-navigation>
    <div class="w-screen bg-punk-green xl:bg-blog bg-cover bg-no-repeat bg-fixed bg-center">
        <div class="min-h-screen bg-gradient-to-r from-punk-pink via-transparent to-transparent basis-full z-10 xl:mr-6 max-h-screen overflow-scroll pb-16">
            <div class="text-center my-12">
                <h1 class="font-display text-5xl xl:text-8xl text-punk-light">blog</h1>
                <div class="grid grid-cols-1 2xl:grid-cols-2 gap-4 my-12 text-left w-5/6 md:w-3/4 mx-auto">
                    @foreach ($articles as $slug => $article)
                        <div class="p-4 xl:p-8 bg-punk-dark/80 rounded-xl">
                            <img alt="Vorschaubild des Blogartikels {{ $article->title }}" class="rounded-xl object-cover md:h-96 xl:h-auto w-full shadow-xl" src="{{ asset($article->image) }}">
                            <h2 class="text-3xl 2xl:text-4xl py-4 hover:underline text-punk-light hover:text-punk-pink break-words">
                                <a href="{{ config('app.url').config('punks.url.blog').$slug }}">
                                    @if ($loop->first)
                                        <span class="text-punk-pink">NEU: </span>
                                    @endif
                                    {{ $article->title }}
                                </a>
                            </h2>
                            <p class="text-punk-light font-serif font-bold">{{ $article->author->name }} - {{ $article->published_at }}</p>
                        </div>
                        @if ($loop->first)
                            <div class="bg-gradient-to-r from-punk-dark/80 to-punk-pink/80 w-full mx-auto rounded-xl p-4 xl:p-8 2xl:flex 2xl:items-center">
                                <div>
                                    <h2 class="text-left text-3xl 2xl:text-5xl py-2 text-punk-light">Der agile punks Blog</h2>
                                    <ul class="text-left text-lg font-serif xl:list-disc xl:pl-4 text-punk-light">
                                        <li>Artikel zu Team- und Organisationsentwicklung, Leadership, Purpose und so Kram.</li>
                                        <li>Paar philosophische Hirngespinnste, wenn Artikel nachts entstanden ist.</li>
                                        <li>Kurz, prägnant, kein Gelaber um den heißen Brei, kein Sales, keine Pay Wall.</li>
                                    </ul>
                                    <svg class="fill-punk-light mx-auto mt-4 2xl:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 21l-12-18h24z"/></svg>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-navigation>
