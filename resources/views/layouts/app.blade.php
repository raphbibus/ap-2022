<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', config('app.locale')) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title ?? config('app.name')}}</title>
        <meta property="og:title" content="{{$title ?? config('app.name')}}">

        <meta name="description" content="{{$description ?? "agil, weil's sonst niemand ist."}}">
        <meta property="og:description" content="{{$description ?? "agil, weil's sonst niemand ist."}}">

        <meta property="og:image" content="{{ $image ? str_replace('.webp', '.jpg', $image) : asset('img/meta-image.png') }}">

        <meta name="robots" content="index, follow">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="{{ str_replace('_', '-', config('app.locale')) }}">
        <meta property="og:site_name" content="{{config('app.name')}}">
        <meta property="og:url" content="{{url()->current()}}">

        <base href="{{config('app.url')}}">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @livewireStyles

        <script>
            if (
                localStorage.getItem('theme') === 'dark' ||
                (!('theme' in localStorage) &&
                    window.matchMedia('(prefers-color-scheme: dark)').matches)
            ) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        </script>

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
