<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">
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
        @livewireScripts
    </body>
</html>
