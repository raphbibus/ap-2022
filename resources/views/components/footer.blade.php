<footer class="w-full py-28 xl:py-16 bg-punk-dark dark:bg-darkpunk-dark">
    <div class="text-center w-1/2 mx-auto">
        <span class="text-6xl font-display text-punk-lightgray hover:text-punk-pink
            dark:text-darkpunk-lightgray dark:hover:text-darkpunk-pink">
            <a href="/">agile punks</a>
        </span>
        <hr class="my-2 border-punk-darker dark:border-darkpunk-darker"/>
        <span class="text-3xl font-sans text-punk-lightgray dark:text-darkpunk-lightgray">
            einmal punk, immer punk.
            <br>est. 2018
        </span>
        <hr class="my-2 border-punk-darker dark:border-darkpunk-darker"/>
        <span class="text-lg font-serif font-extrabold block text-punk-darkred dark:text-darkpunk-darkred">
            Connecte dich mit paar echten Punks:
        </span>
        @foreach(config('punks.people') as $punk)
            @if($punk['role'] == 'punk')
                <span class="text-2xl font-extrabold font-serif hover:underline mx-2 text-punk-darkred hover:text-punk-pink dark:text-punk-darkred dark:hover:text-darkpunk-pink">
                    <a href="{{$punk['linkedin']}}" target="_blank" rel="noreferrer noopener">{{$punk['display_name']}}</a>
                </span>
            @endif
        @endforeach
        <hr class="my-2 border-punk-darker dark:border-darkpunk-darker"/>
        <span class="text-2xl font-extrabold font-serif hover:underline ml-2 text-punk-blue hover:text-punk-pink dark:text-punk-blue dark:hover:text-darkpunk-pink">
            <a href="https://www.linkedin.com/company/agile-punks/" target="_blank" rel="noreferrer noopener">ap @ linkedin</a>
        </span><br>
        <span class="text-lg font-bold font-serif hover:underline text-punk-violet hover:text-punk-pink dark:text-punk-violet dark:hover:text-darkpunk-pink">
            <a href="/impressum">impressum und das übliche</a>
        </span><br>
        <hr class="my-2 border-punk-darker dark:border-darkpunk-darker"/>
        <span class="text-punk-light dark:text-darkpunk-light">
            no &#127850; &amp; no &#128373;
        </span>
        <hr class="my-2 border-punk-darker dark:border-darkpunk-darker"/>
        <div x-data="{
            toggleDarkMode() {
                    if (localStorage.getItem('theme') === 'dark') {
                        localStorage.theme = 'light'
                        document.documentElement.classList.remove('dark');
                    } else {
                        localStorage.theme = 'dark'
                        document.documentElement.classList.add('dark');
                    }
                }
            }">
            <button @click="toggleDarkMode()" class="text-lg font-bold font-serif hover:underline text-punk-brown hover:text-punk-pink dark:text-punk-lila dark:hover:text-darkpunk-pink">hell/dunkel wechseln</button>
        </div>
    </div>
</footer>
