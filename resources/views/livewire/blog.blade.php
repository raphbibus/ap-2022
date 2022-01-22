<x-navigation>
    <div class="min-h-screen bg-gradient-to-r from-punk-pink via-transparent to-transparent basis-full z-10 mr-6 max-h-screen overflow-scroll">
        <div class="text-right my-12">
            <h1 class="font-display text-8xl text-punk-green">blog</h1>
            <div class="grid grid-cols-2 gap-4 my-12 text-right">
                @foreach ($articles as $slug => $article)
                    <div class="p-2">
                        <img alt="Vorschaubild des Blogartikels {{ $article->title }}" class="rounded-xl object-cover h-60 w-full shadow-xl" src="{{ asset($article->image) }}">
                        <h2 class="text-3xl py-2 hover:underline"><a href="{{ config('app.url').config('punks.url.blog').$slug }}">{{ $article->title }}</a></h2>
                        <p class="">{{ $article->author->name }} - {{ $article->published_at }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-navigation>
