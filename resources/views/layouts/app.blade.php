<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', config('app.locale')) }}" class="scroll-smooth dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title ?? config('app.name')}}</title>
        <meta property="og:title" content="{{$title ?? config('app.name')}}">

        <meta name="description" content="{{$description ?? "agil, weil's sonst niemand ist."}}">
        <meta property="og:description" content="{{$description ?? "agil, weil's sonst niemand ist."}}">

        <meta property="og:image" content="{{ $image ?? asset('img/meta-image.png') }}">

        <meta name="robots" content="index, follow">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="{{ str_replace('_', '-', config('app.locale')) }}">
        <meta property="og:site_name" content="{{config('app.name')}}">
        <meta property="og:url" content="{{url()->current()}}">

        <base href="{{config('app.url')}}">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
        @livewireStyles
    </head>
    <body class="leading-normal tracking-normal h-screen
        text-punk-light bg-punk-dark
        dark:text-darkpunk-light dark:bg-darkpunk-dark">
        <div id="page_content" class="min-w-full container">
            {{$slot}}
        </div>
        <x-footer></x-footer>
        @livewireScripts
    </body>
</html>
