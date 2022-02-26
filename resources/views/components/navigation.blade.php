{{--  DESKTOP NAV  --}}
<div class="hidden relative xl:flex xl:flex-row overflow-hidden">
    <div class="min-h-screen bg-gradient-to-r from-punk-violet to-punk-green basis-48 flex items-center justify-center z-10">
        <a href="/blog" class="-rotate-90 text-3xl transition duration-150 ease-in-out hover:scale-125">blog</a>
    </div>
    <div class="min-h-screen bg-gradient-to-r from-punk-green to-punk-blue basis-48 flex items-center justify-center z-10">
        <a href="/podcast" class="-rotate-90 text-3xl transition duration-150 ease-in-out hover:scale-125">podcast</a>
    </div>
    <div class="min-h-screen bg-gradient-to-r from-punk-blue to-punk-brown basis-48 flex items-center justify-center z-10">
        <a href="/lifestyle" class="-rotate-90 text-3xl transition duration-150 ease-in-out hover:scale-125">lifestyle</a>
    </div>
    <div class="min-h-screen bg-gradient-to-r from-punk-brown to-punk-pink basis-48 flex items-center justify-center z-10">
        <a href="/workshops" class="-rotate-90 text-3xl transition duration-150 ease-in-out hover:scale-125">workshops</a>
    </div>
    {{$slot}}
</div>

{{--  MOBILE NAV  --}}
<div class="xl:hidden overflow-hidden">
    <div class="xl:hidden fixed bottom-0 z-20 text-center mb-6 w-full">
        <div class="bg-punk-dark rounded-xl mx-auto w-96 p-2">
            <a href="/blog" class="inline-block mr-2 text-5xl text-punk-green hover:text-punk-pink">B<span class="text-sm">log</span></a>
            <a href="/podcast" class="inline-block mx-2 text-5xl text-punk-violet hover:text-punk-pink">P<span class="text-sm">odcast</span></a>
            <a href="/lifestyle" class="inline-block mx-2 text-5xl text-punk-blue hover:text-punk-pink">L<span class="text-sm">ifestyle</span></a>
            <a href="/workshops" class="inline-block ml-2 text-5xl text-punk-brown hover:text-punk-pink">W<span class="text-sm">orkshops</span></a>
        </div>
    </div>
    {{$slot}}
</div>
