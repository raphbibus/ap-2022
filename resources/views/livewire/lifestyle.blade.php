<x-navigation>
    <div class="w-screen bg-punk-blue xl:bg-lifestyle bg-cover bg-no-repeat bg-fixed bg-center">
        <div class="min-h-screen bg-gradient-to-r from-punk-pink via-transparent to-transparent basis-full z-10 xl:mr-6 max-h-screen overflow-scroll pb-16">
            <div class="text-center my-12">
                <h1 class="font-display text-5xl xl:text-8xl text-punk-light">lifestyle</h1>
                <div class="grid grid-cols-1 gap-4 my-12 text-center w-5/6 md:w-3/4 2xl:w-1/2 mx-auto">
                    <div class="p-4 xl:p-8 bg-punk-dark/80 rounded-xl text-punk-light">
                        <h2 class="text-3xl xl:text-5xl py-2 break-words">
                            Es ist einfach, ein Punk zu sein. Und schwierig. Und simpel.
                        </h2>
                        <img alt="Das könnte auch dein neues Leben sein." class="rounded-xl object-cover h-60 w-full shadow-xl my-8" src="{{ asset('img/lifestyle.webp') }}">
                        <h2 class="text-2xl xl:text-3xl py-2 break-words">
                            Folge einfach diesen <span class="text-punk-blue">6 Regeln</span>, die Ralph sich um 22:30 Freitagabend ausgedacht hat.
                        </h2>
                        <p class="text-center font-serif text-xl p-8">
                            <b class="text-punk-blue">Versuche in Lösungen zu denken.</b> Aber erst, wenn du dir sicher bist, dass es ein Problem gibt.
                        </p>
                        <hr class="border-punk-blue mt-2"/>
                        <p class="text-center font-serif text-xl p-8">
                            Sei kein:e Berater:in. Geil dich nicht an Stundensätzen auf. <b class="text-punk-blue">Fördere Kollaboration, lehre Eigenständigkeit.</b>
                        </p>
                        <hr class="border-punk-blue mt-2"/>
                        <p class="text-center font-serif text-xl p-8">
                            Am Tisch ist immer noch Platz für einen weiteren Stuhl. <b class="text-punk-blue">Freu dich immer über mehr Kommunikation und Beteiligung.</b>
                        </p>
                        <hr class="border-punk-blue mt-2"/>
                        <p class="text-center font-serif text-xl p-8">
                            Eine Hypothese am Anfang bringt dich zu einem Ergebnis am Ende. <b class="text-punk-blue">Erkenne den Unterschied zwischen Kausalität und Korrelation.</b>
                        </p>
                        <hr class="border-punk-blue mt-2"/>
                        <p class="text-center font-serif text-xl p-8">
                            Wirf deine Ideologien über Board. <b class="text-punk-blue">Erschaffe das, was gebraucht wird.</b> Nicht irgendwas, das im Lehrbuch steht.
                        </p>
                        <hr class="border-punk-blue mt-2"/>
                        <p class="text-center font-serif text-xl p-8">
                            <b class="text-punk-blue">Sei Teil des Schiffes.</b> Betreibe keinen Katastrophentourismus, sondern verhindere das Unheil.
                        </p>
                    </div>

                    <div class="p-4 xl:p-8 bg-punk-dark/80 rounded-xl text-punk-light">
                        <h2 class="text-2xl xl:text-3xl py-2 break-words">
                            Das Wichtigste: <span class="text-punk-blue">Sei halt auch ein Punk.</span>
                        </h2>
                        <p class="text-left font-serif text-xl py-2">
                            Schnapp dir dein Sparschwein und lauf im nächsten Workshop mit deinem neuen Agile Punks Hoodie auf. 9/10 Zahnärzten würden dir damit gerne eine Business Model Canvas abkaufen.
                            <div class="text-center my-4">
                                <a class="bg-punk-green text-xl lg:text-3xl text-punk-light p-4 rounded-xl mr-2 mt-2 inline-block hover:bg-punk-light hover:text-punk-green" href="https://shop.spreadshirt.de/agile-punks/agile+punks+20-A5e2aea0ae447424d5b535303?productType=1047&sellable=xrXml797dlF13z9vNgjq-1047-22&appearance=2">Let me be your Hoodie, Baby!</a>
                            </div>
                        </p>
                    </div>

                    <div class="p-4 xl:p-8 bg-punk-dark/80 rounded-xl text-punk-light">
                        <h2 class="text-2xl xl:text-3xl pt-2 pb-8 break-words">
                            Hier, gibt sogar Bilder.
                        </h2>
                        @for ($i = 1; $i <= 6; $i++)
                            <img alt="Ein Bild von einem Punk mit Hoodie" class="object-cover md:h-96 xl:h-auto w-full" src="{{ asset('img/hoodie-0'.$i.'.webp') }}">
                        @endfor
                            <p class="text-left font-serif text-xl py-2">
                                Geil oder? Deswegen hier nochmal die Chance dir einen Hoodie zu holen:
                                <div class="text-center my-4">
                                    <a class="bg-punk-green text-xl lg:text-3xl text-punk-light p-4 rounded-xl mr-2 mt-2 inline-block hover:bg-punk-light hover:text-punk-green" href="https://shop.spreadshirt.de/agile-punks/agile+punks+20-A5e2aea0ae447424d5b535303?productType=1047&sellable=xrXml797dlF13z9vNgjq-1047-22&appearance=2">Ja, okay. Ich nehm einen.</a>
                                </div>
                            </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-navigation>
