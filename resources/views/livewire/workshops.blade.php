<x-navigation>
    <div class="w-screen bg-punk-brown xl:bg-workshops bg-cover bg-no-repeat bg-fixed bg-center">
        <div class="min-h-screen bg-gradient-to-r from-punk-pink via-transparent to-transparent basis-full z-10 xl:mr-6 max-h-screen overflow-scroll pb-16">
            <div class="text-center my-12">
                <h1 class="font-display text-5xl xl:text-8xl text-punk-light">workshops</h1>
                <div class="grid grid-cols-1 gap-4 my-12 text-center w-5/6 md:w-3/4 2xl:w-1/2 mx-auto">
                    <div class="p-4 xl:p-8 bg-punk-dark/80 rounded-xl text-punk-light">
                        <h2 class="text-2xl xl:text-3xl py-2 break-words">
                            <span class="text-punk-brown">Was koschtn a Workshop?</span><br><span class="text-punk-green">Ja was willst'n machen?</span>
                        </h2>
                        <p class="text-left font-serif text-xl py-2">
                            Wir helfen dir gerne dabei, ein passendes Workshop-Format zu finden. Anforderungen sind selten gleich, alleine schon weil die Menschen dahinter immer unterschiedlich sind.<br>
                            Wir können dir Klassiker anbieten, z.B. eine Retrospektive mit deinem Team, ein paar Tage Einführung in agiles Arbeiten oder einfach mal ein Sparring, um mit deinen aktuellsten Herausforderungen klarzukommen.
                        </p>
                        <p class="text-left font-serif text-xl py-2">
                            Mit viel Erfahrung und einem großen Netzwerk an Spezialist:innen in der Hinterhand, bekommst du auf jeden Fall eine Session mit uns, die dich in deinen Vorhaben weiterbringt.<br>
                            Für Anfragen und Organisation hilft uns dabei die Agentur unseres Punks Max, Space Four. Hier gibt's auch gleich nen Button, der dich bequem dort hinführt.
                            <div class="text-center my-4">
                                <a class="bg-punk-darker text-xl lg:text-3xl text-punk-light p-4 rounded-xl mr-2 mt-2 inline-block hover:bg-punk-light hover:text-punk-darker" href="https://space-4.de/kontakt/" target="_blank" rel="noopener noreferrer">Woah!-rkshop anfragen</a>
                            </div>
                        </p>
                        <hr class="border-punk-pink my-2"/>
                        <h2 class="text-2xl xl:text-3xl pt-2 pb-4 break-words">
                            15x Inspiration im For-Loop
                        </h2>
                        @for($i = 1; $i <= 15; $i++)
                            <img alt="Das könnte auch dein neues Leben sein." class="rounded-xl object-cover h-60 w-full shadow-xl mb-8" src="{{ asset('img/workshops/'.$i.'.jpg') }}">
                        @endfor
                        <div class="text-center my-4">
                            <a class="bg-punk-darker text-xl lg:text-3xl text-punk-light p-4 rounded-xl mr-2 mt-2 inline-block hover:bg-punk-light hover:text-punk-darker" href="https://space-4.de/kontakt/" target="_blank" rel="noopener noreferrer">Letzte Chance<br>Workshop ballern!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-navigation>
