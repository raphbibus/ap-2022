<footer class="w-full py-28 xl:py-16 bg-punk-dark">
    <div class="text-center w-1/2 mx-auto">
        <span class="text-6xl font-display text-punk-darker hover:text-punk-pink">
            <a href="/">agile punks</a>
        </span>
        <hr class="border-punk-darker my-2"/>
        <span class="text-3xl text-punk-darker font-sans">
            einmal punk, immer punk.
            <br>est. 2018
        </span>
        <hr class="border-punk-darker my-2"/>
        <span class="text-2xl text-punk-darkred font-sans block">
            Connecte dich mit paar echten Punks:
        </span>
        @foreach(config('punks.people') as $punk)
            @if($punk['role'] == 'punk')
                <span class="text-xl font-extrabold font-serif text-punk-darkred hover:text-punk-pink hover:underline mx-2">
                    <a href="{{$punk['linkedin']}}" target="_blank" rel="noreferrer noopener">{{$punk['display_name']}}</a>
                </span>
            @endif
        @endforeach
        <hr class="border-punk-darker my-2"/>
        <span class="text-xl font-extrabold font-serif text-punk-violet hover:text-punk-pink hover:underline">
            <a href="/impressum">impressum und das übliche</a>
        </span><br>
        <span class="text-xl font-extrabold font-serif text-punk-blue hover:text-punk-pink hover:underline ml-2">
            <a href="https://www.linkedin.com/company/agile-punks/" target="_blank" rel="noreferrer noopener">ap @ linkedin</a>
        </span>
    </div>
</footer>
