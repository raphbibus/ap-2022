<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>agile punks</title>
        <meta name="description" content="OHNE PUNK UND KOMA">

        <x-fonts></x-fonts>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
        @livewireStyles
    </head>
    <body class="leading-normal tracking-normal text-punk-dark bg-punk-light dark:text-punk-light dark:bg-punk-dark h-screen">
        <div id="page_content" class="min-w-full container">
            {{$slot}}
        </div>
        <footer class="w-full py-28 xl:py-16">
            <div class="text-center w-1/2 mx-auto">
                <span class="text-6xl font-display text-punk-darker hover:text-punk-pink">
                    <a href="/">agile punks</a>
                </span>
                <hr class="border-punk-darker my-2"/>
                <span class="text-3xl text-punk-darker font-sans">einmal punk, immer punk.<br>est. 2018</span>
                <hr class="border-punk-darker my-2"/>
                <span class="text-xl font-extrabold font-serif text-punk-darkred hover:text-punk-pink underline">
                    <a href="/impressum">impressum und das übliche</a>
                </span>
            </div>
        </footer>
        @livewireScripts
    </body>
</html>
