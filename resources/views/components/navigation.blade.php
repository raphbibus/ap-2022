{{--  DESKTOP NAV  --}}
<div class="relative xl:flex xl:flex-row overflow-hidden">
    <div class="hidden min-h-screen basis-48 xl:flex items-center justify-center z-10 bg-gradient-to-r from-punk-violet to-punk-green dark:from-darkpunk-violet dark:to-darkpunk-green">
        <a href="/blog" class="-rotate-90 text-3xl transition duration-150 ease-in-out hover:scale-125 text-punk-light dark:text-darkpunk-light">blog</a>
    </div>
    <div class="hidden min-h-screen basis-48 xl:flex items-center justify-center z-10 bg-gradient-to-r from-punk-green to-punk-blue dark:from-darkpunk-green dark:to-darkpunk-blue">
        <a href="/podcast" class="-rotate-90 text-3xl transition duration-150 ease-in-out hover:scale-125 text-punk-light dark:text-darkpunk-light">podcast</a>
    </div>
    <div class="hidden min-h-screen basis-48 xl:flex items-center justify-center z-10 bg-gradient-to-r from-punk-blue to-punk-brown dark:from-darkpunk-blue dark:to-darkpunk-brown">
        <a href="/lifestyle" class="-rotate-90 text-3xl transition duration-150 ease-in-out hover:scale-125 text-punk-light dark:text-darkpunk-light">lifestyle</a>
    </div>
    <div class="hidden min-h-screen basis-48 xl:flex items-center justify-center z-10 bg-gradient-to-r from-punk-brown to-punk-pink dark:from-darkpunk-brown dark:to-darkpunk-pink">
        <a href="/workshops" class="-rotate-90 text-3xl transition duration-150 ease-in-out hover:scale-125 text-punk-light dark:text-darkpunk-light">workshops</a>
    </div>
    <div class="xl:hidden fixed bottom-0 z-20 text-center mb-6 w-full">
        <div class="rounded-xl mx-auto w-96 p-2 bg-punk-dark dark:bg-darkpunk-dark">
            <a href="/blog" class="inline-block mr-2 text-5xl text-punk-green hover:text-punk-pink dark:text-punk-green dark:hover:text-darkpunk-pink">B<span class="text-sm">log</span></a>
            <a href="/podcast" class="inline-block mx-2 text-5xl text-punk-violet hover:text-punk-pink dark:text-punk-violet dark:hover:text-darkpunk-pink">P<span class="text-sm">odcast</span></a>
            <a href="/lifestyle" class="inline-block mx-2 text-5xl text-punk-blue hover:text-punk-pink dark:text-punk-blue dark:hover:text-darkpunk-pink">L<span class="text-sm">ifestyle</span></a>
            <a href="/workshops" class="inline-block ml-2 text-5xl text-punk-brown hover:text-punk-pink dark:text-punk-brown dark:hover:text-darkpunk-pink">W<span class="text-sm">orkshops</span></a>
        </div>
    </div>
    {{$slot}}
</div>

