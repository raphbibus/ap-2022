<x-navigation>
    <div class="w-screen bg-blog bg-cover bg-no-repeat bg-fixed bg-center">
        <div class="min-h-screen bg-gradient-to-r from-punk-pink via-transparent to-transparent basis-full z-10 mr-6 max-h-screen overflow-scroll">
            <div class="text-center my-12">
                <h1 class="font-sans text-6xl text-punk-light leading-[5rem]">{{ $articleMeta->title }}</h1>
                <div class="grid grid-cols-1 gap-4 my-12 text-left w-1/2 mx-auto">
                        <div class="p-8 bg-punk-dark/80 rounded-xl">
                            <div class="flex flex-row items-center">
                                <div class="flex-none">
                                    <img alt="Titelbild des Blogartikels {{ $articleMeta->title }}" class="rounded-xl object-center h-40 w-auto shadow-xl" src="{{ asset($articleMeta->author->image) }}">
                                </div>
                                <div class="ml-6">
                                    <p class="leading-6 font-serif text-lg">
                                        Veröffentlicht am {{ $articleMeta->published_at }} von<br>
                                        <a class="text-punk-light hover:text-punk-pink font-sans text-xl" href="{{ $articleMeta->author->linkedin }}" target="_blank" rel="noopener noreferrer">{{ $articleMeta->author->name }}</a>,
                                        Punk seit {{ $articleMeta->author->since }}.<br>
                                        {{ $articleMeta->author->display_name }}s Fokus liegt auf {{ $articleMeta->author->short_bio }}.<br>
                                    </p>
                                </div>
                            </div>
                            <hr class="border-punk-pink mt-8" />
                            <div class="mx-auto prose prose-invert prose-xl font-serif break-words prose-img:rounded-xl prose-img:shadow-xl prose-h1:hidden prose-blockquote:border-punk-pink hover:prose-a:text-punk-pink">{!! $articleText !!}</div>
                            <hr class="border-punk-pink mt-8 mb-2" />
                        </div>
                </div>
                <p>
                    <a href="/blog" class="font-serif hover:text-punk-pink">zurück zur Übersicht</a>
                </p>
            </div>
        </div>
    </div>
</x-navigation>
