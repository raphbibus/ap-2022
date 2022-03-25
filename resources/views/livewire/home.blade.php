<x-navigation>
    <div class="min-h-screen p-8
        basis-full flex md:items-center justify-end xl:z-10 xl:mr-6 xl:p-0
        bg-punk-pink dark:bg-darkpunk-pink xl:bg-transparent dark:xl:bg-transparent
        xl:bg-gradient-to-r xl:from-punk-pink xl:via-transparent xl:to-transparent
        dark:xl:bg-gradient-to-r dark:xl:from-darkpunk-pink dark:xl:via-transparent dark:xl:to-transparent">
        <div class="text-right">
            <h1 class="hidden xl:block font-display text-9xl text-punk-light dark:text-darkpunk-light">agile punks</h1>
            <p class="font-sans text-xl lg:text-3xl text-punk-dark xl:text-punk-light dark:text-darkpunk-dark dark:xl:text-darkpunk-light">
                Organisationsingenieure aus Leidenschaft.<br>
                Antiberater aus Überzeugung.<br>
                Dieser kleine Lichtblick im Sturm deiner Transformation.
                <span class="text-3xl lg:text-5xl block pt-12 text-punk-dark xl:text-punk-pink dark:text-darkpunk-dark dark:xl:text-darkpunk-pink">Agil, weil's sonst niemand ist.</span>
            </p>
            <h1 class="xl:hidden font-display text-7xl mt-8 text-punk-dark dark:text-darkpunk-dark">agile punks</h1>
        </div>
    </div>
    <video autoplay loop muted class="absolute w-auto min-w-full min-h-full max-w-none hidden xl:block">
        <source
            src="{{asset('videos/intro-small-02.mp4')}}"
            type="video/mp4"/>
        Your browser does not support the video tag.
    </video>
</x-navigation>

