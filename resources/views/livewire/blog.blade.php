<x-navigation>
    <div class="w-screen bg-blog bg-cover bg-no-repeat bg-fixed bg-center">
        <div class="min-h-screen bg-gradient-to-r from-punk-pink via-transparent to-transparent basis-full z-10 mr-6 max-h-screen overflow-scroll">
            <div class="text-center my-12">
                <h1 class="font-display text-8xl text-punk-light">blog</h1>
                <div class="grid grid-cols-1 gap-4 my-12 text-left w-3/4 2xl:w-1/2 mx-auto">
                    @foreach ($articles as $slug => $article)
                        <div class="p-8 bg-punk-dark/80 rounded-xl">
                            <img alt="Vorschaubild des Blogartikels {{ $article->title }}" class="rounded-xl object-cover h-60 w-full shadow-xl" src="{{ asset($article->image) }}">
                            <h2 class="text-3xl py-4 hover:underline hover:text-punk-pink">
                                <a href="{{ config('app.url').config('punks.url.blog').$slug }}">
                                    @if ($loop->first)
                                        <span class="text-punk-pink">NEU: </span>
                                    @endif
                                    {{ $article->title }}
                                </a>
                            </h2>
                            <p class="">{{ $article->author->name }} - {{ $article->published_at }}</p>
                        </div>
                        @if ($loop->first)
                            <div class="bg-gradient-to-r from-punk-dark/80 to-punk-pink/80 mx-auto rounded-xl my-8 p-8">
                                <p class="text-left text-3xl py-2">Der agile punks Blog</p>
                                <ul class="text-left text-xl font-serif list-disc pl-4">
                                    <li>Artikel zu Team- und Organisationsentwicklung, Leadership, Purpose und so Kram.</li>
                                    <li>Paar philosophische Hirngespinnste, wenn Artikel nachts entstanden ist.</li>
                                    <li>Kurz, prägnant, kein Gelaber um den heißen Brei, kein Sales, keine Pay Wall.</li>
                                </ul>
                                <svg class="fill-punk-light mx-auto mt-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 21l-12-18h24z"/></svg>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-navigation>
