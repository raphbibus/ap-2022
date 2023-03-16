<x-navigation>
    <div class="w-screen xl:bg-workshops bg-cover bg-no-repeat bg-fixed bg-center bg-punk-brown dark:bg-darkpunk-brown">
        <div class="min-h-screen basis-full z-10 xl:mr-6 max-h-screen overflow-scroll pb-16 bg-gradient-to-r from-punk-pink via-transparent to-transparent dark:from-darkpunk-pink dark:via-transparent dark:to-transparent">
            <div class="text-center my-12">
                <h1 class="font-display text-5xl xl:text-8xl text-punk-light dark:text-darkpunk-light">workshops</h1>
                <div class="grid grid-cols-1 gap-4 my-12 text-center w-5/6 md:w-3/4 2xl:w-1/2 mx-auto">
                    <div class="p-4 xl:p-8 rounded-xl text-punk-light dark:text-darkpunk-light bg-punk-dark/80 dark:bg-darkpunk-dark/80">
                        <h2 class="text-3xl xl:text-5xl py-2 break-words">
                            <span class="text-punk-brown">Was koscht'n a Workshop?</span><br><span class="text-punk-green">Ja was willst'n machen?</span>
                        </h2>
                        <p class="text-left font-serif text-lg py-2">
                            Wir helfen dir gerne dabei, ein passendes Workshop-Format zu finden. Anforderungen sind selten gleich, alleine schon weil die Menschen dahinter immer unterschiedlich sind.<br>
                            Wir können dir Klassiker anbieten, z.B. eine Retrospektive mit deinem Team, ein paar Tage Einführung in agiles Arbeiten oder einfach mal ein Sparring, um mit deinen aktuellsten Herausforderungen klarzukommen.
                        </p>
                        <p class="text-left font-serif text-lg py-2">
                            Mit viel Erfahrung und einem großen Netzwerk an Spezialist:innen in der Hinterhand, bekommst du auf jeden Fall eine Session mit uns, die dich in deinen Vorhaben weiterbringt.<br>
                            Für Anfragen und Organisation hilft uns dabei die Agentur unseres Punks Max, Space Four. Hier gibt's auch gleich nen Button, der dich bequem dort hinführt.
                            <div class="text-center my-4">
                                <a class="bg-punk-darker text-xl lg:text-3xl text-punk-light p-4 rounded-xl mt-2 inline-block hover:bg-punk-light hover:text-punk-darker" href="mailto:info@agile-punks.com">Woah!-rkshop anfragen</a>
                            </div>
                        </p>
                        <hr class="my-2 border-punk-brown dark:border-darkpunk-brown"/>
                        <h2 class="text-3xl xl:text-5xl pt-2 pb-4 break-words">
                            15x Inspiration im For-Loop (und was wir so machen)
                        </h2>
                        @for($i = 1; $i <= 15; $i++)
                            <img alt="Das könnte auch dein neues Leben sein." class="rounded-xl object-cover md:h-72 xl:h-auto w-full shadow-xl mb-8" src="{{ asset('img/workshops/'.$i.'.webp') }}">
                            @if($i == 1)
                                <h3 class="text-2xl xl:text-4xl pt-2 pb-4 break-words text-left">
                                    Ihr ruft um Hilfe
                                </h3>
                                <p class="text-left font-serif text-lg">
                                    Wir hören zu. Gemeinsam mit euch versuchen wir eure wirklichen Probleme zu identifizieren.
                                    Oftmals (eigentlich fast immer hust hust) liegen diese nämlich viel tiefer oder an ganz anderen Stellen, als dort, wo sich die Symptome bemerkbar machen.
                                </p><p class="text-left font-serif text-lg pt-4 pb-4">
                                    In dieser Phase geht es darum die größtmögliche Transparenz zu schaffen und aufzudecken, wo der Schuh wirklich drückt.
                                    Wir können nicht versprechen, dass es nicht unangenehm wird. Wir können nur versprechen, dass danach die nötige Klarheit herrscht, eure Herausforderungen nachhaltig anzugehen.
                                </p>
                                <div class="text-center mb-4">
                                    <a class="bg-punk-darker text-xl lg:text-3xl xl:text-3xl 2xl:text-3xl text-punk-light p-4 rounded-xl inline-block hover:bg-punk-light hover:text-punk-darker" href="mailto:info@agile-punks.com">Komm, ab geht's. Workshop!</a>
                                </div>
                            @endif
                            @if($i == 4)
                                <h3 class="text-2xl xl:text-4xl pt-2 pb-4 break-words text-left">
                                    Wir verkaufen euch was (oder nix)
                                </h3>
                                <p class="text-left font-serif text-lg">
                                    Falls wir ein Thema mit euch identifiziert haben, werden wir mit euch zusammen einen ersten Plan für potentielle Herangehensweisen aufstellen.
                                    Dabei wird sich zeigen, ob bestehende Werkzeugkästen passen können, oder ob wir mit euch zusammen eine personalisierte Trickkiste aufbauen müssen.
                                </p><p class="text-left font-serif text-lg pt-4 pb-4">
                                    Garantieren können wir euch aber eins: Wir werden euch niemals auf Biegen und Brechen davon überzeugen wollen,
                                    dass wir einer Herausforderung gewachsen sind, wenn wir selbst ganz genau wissen, dass wir es nicht sind. Euer Vorhaben ist zu wichtig, ihr seid nicht unsere Spielwiese.
                                </p>
                                <div class="text-center mb-4">
                                    <a class="bg-punk-brown text-2xl lg:text-4xl xl:text-5xl 2xl:text-5xl text-punk-light p-4 rounded-xl inline-block hover:bg-punk-light hover:text-punk-brown" href="mailto:info@agile-punks.com">Jetzt aber!<br>Workshop geht klar!</a>
                                </div>
                            @endif
                            @if($i == 9)
                                <h3 class="text-2xl xl:text-4xl pt-2 pb-4 break-words text-left">
                                    Wir leben alle mit den Konsequenzen
                                </h3>
                                <p class="text-left font-serif text-lg">
                                    Auf den Säulen der Empirie (für coole Kids: datengetrieben) - Transparenz, Inspektion und Adaption - haben wir gemeinsam nachhaltige Lösungswege gefunden.
                                    Vielleicht ist das Ziel noch nicht erreicht, aber der neue Status Quo wird stabiler sein, als der vorherige.
                                </p><p class="text-left font-serif text-lg pt-4 pb-4">
                                    Am Ende unserer gemeinsamen Zeit kennt und könnt ihr Methoden und Werkzeuge, um euren alten Dämonen zu begegnen.
                                    Ihr seid jetzt selbst ein bisschen agile punks.
                                </p>
                                <div class="text-center mb-4">
                                    <a class="bg-punk-blue text-3xl lg:text-5xl xl:text-6xl 2xl:text-7xl text-punk-light p-4 rounded-xl inline-block hover:bg-punk-light hover:text-punk-blue" href="mailto:info@agile-punks.com">8,6/10 Zahnärzte empfehlen uns.</a>
                                </div>
                            @endif
                            @if($i == 14)
                                <h3 class="text-2xl xl:text-4xl pt-2 pb-4 break-words text-left">
                                    Ganz schön weit gescrolled...
                                </h3>
                                <p class="text-left font-serif text-lg pb-12">
                                    Es wird auf jeden Fall zu euren Anforderungen passen. Versprochen. Lasst einfach schauen, dass wir durchziehen, was wir auf irgendwelche Sticky-Notes schreiben lol.
                                </p>
                            @endif
                        @endfor
                        <div class="text-center my-4">
                            <a class="bg-punk-pink text-4xl lg:text-6xl xl:text-7xl 2xl:text-8xl text-punk-light p-4 rounded-xl mt-2 inline-block hover:bg-punk-light hover:text-punk-pink" href="mailto:info@agile-punks.com">Letzte Chance<br>Workshop ballern!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-navigation>
