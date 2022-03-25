<x-navigation>
    <div class="w-screen xl:bg-blog bg-cover bg-no-repeat bg-fixed bg-center bg-punk-lila dark:bg-darkpunk-lila">
        <div class="min-h-screen basis-full z-10 xl:mr-6 max-h-screen overflow-scroll pb-16 bg-gradient-to-r from-punk-pink via-transparent to-transparent dark:from-darkpunk-pink dark:via-transparent dark:to-transparent">
            <div class="text-center my-12">
                <h1 class="font-sans text-4xl xl:text-6xl xl:leading-[5rem] text-punk-light dark:text-darkpunk-light">{{ $articleMeta->title }}</h1>
                <div class="grid grid-cols-1 gap-4 my-12 text-left w-5/6 md:w-3/4 2xl:w-1/2 mx-auto">
                        <div class="p-4 xl:p-8 rounded-xl bg-punk-dark/80 dark:bg-darkpunk-dark/80">
                            <div class="flex flex-col md:flex-row items-center">
                                <div class="flex-none">
                                    <img alt="Titelbild des Blogartikels {{ $articleMeta->title }}" class="rounded-xl object-center h-40 w-auto shadow-xl" src="{{ asset($articleMeta->author->image) }}">
                                </div>
                                <div class="ml-6">
                                    <p class="leading-6 font-serif text-lg text-center md:text-left pt-4 md:pt-0 text-punk-light dark:text-darkpunk-light">
                                        Veröffentlicht am {{ $articleMeta->published_at }} von<br>
                                        <a class="font-sans text-xl text-punk-light dark:text-darkpunk-light hover:text-punk-pink dark:hover:text-darkpunk-pink" href="{{ $articleMeta->author->linkedin }}" target="_blank" rel="noopener noreferrer">{{ $articleMeta->author->name }}</a>,
                                        Punk seit {{ $articleMeta->author->since }}.<br>
                                        {{ $articleMeta->author->display_name }}s Fokus liegt auf {{ $articleMeta->author->short_bio }}.<br>
                                    </p>
                                </div>
                            </div>
                            <hr class="mt-8 border-punk-pink dark:border-darkpunk-pink" />
                            <div class="mx-auto prose prose-invert prose-xl font-serif break-words prose-img:rounded-xl prose-img:shadow-xl prose-h1:hidden
                                prose-blockquote:border-punk-pink hover:prose-a:text-punk-pink
                                dark:prose-blockquote:border-darkpunk-pink dark:hover:prose-a:text-darkpunk-pink">{!! $articleText !!}</div>
                            <hr class="mt-8 mb-2 border-punk-pink dark:border-darkpunk-pink" />
                        </div>
                </div>
                <p class="hidden xl:block">
                    <a href="/blog" class="font-serif font-bold text-punk-light dark:text-darkpunk-light hover:text-punk-pink dark:hover:text-darkpunk-pink">zurück zur Übersicht</a>
                </p>
            </div>
        </div>
    </div>
</x-navigation>
