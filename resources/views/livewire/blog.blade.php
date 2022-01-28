<x-navigation>
    <div class="w-screen bg-blog bg-cover bg-no-repeat bg-fixed bg-center">
        <div class="min-h-screen bg-gradient-to-r from-punk-pink via-transparent to-transparent basis-full z-10 mr-6 max-h-screen overflow-scroll">
            <div class="text-center my-12">
                <h1 class="font-display text-8xl text-punk-light">blog</h1>
                <div class="grid grid-cols-1 gap-4 my-12 text-left w-1/2 m-auto">
                    @foreach ($articles as $slug => $article)
                        <div class="p-8 bg-punk-dark/80 rounded-xl">
                            <img alt="Vorschaubild des Blogartikels {{ $article->title }}" class="rounded-xl object-cover h-60 w-full shadow-xl" src="{{ asset($article->image) }}">
                            <h2 class="text-3xl py-4 hover:underline hover:text-punk-pink"><a href="{{ config('app.url').config('punks.url.blog').$slug }}">{{ $article->title }}</a></h2>
                            <p class="">{{ $article->author->name }} - {{ $article->published_at }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-navigation>
