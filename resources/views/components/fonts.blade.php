<link rel="preload" as="font" href="{{ asset('fonts/hvd_peace-webfont.woff2')}}" type="font/woff2" crossorigin="anonymous">
<link rel="preload" as="font" href="{{ asset('fonts/hvd_peace-webfont.woff')}}" type="font/woff" crossorigin="anonymous">
<link rel="preload" as="font" href="{{ asset('fonts/hvd_poster-webfont.woff2')}}" type="font/woff2" crossorigin="anonymous">
<link rel="preload" as="font" href="{{ asset('fonts/hvd_poster-webfont.woff')}}" type="font/woff" crossorigin="anonymous">
<link rel="preload" as="font" href="{{ asset('fonts/joystix_monospace-webfont.woff2')}}" type="font/woff2" crossorigin="anonymous">
<link rel="preload" as="font" href="{{ asset('fonts/joystix_monospace-webfont.woff')}}" type="font/woff" crossorigin="anonymous">

<style>

    @font-face {
        font-family: 'hvd_peaceregular';
        src: local('HVD Peace'), local('HVD-Peace'),
        url('{{ asset('fonts/hvd_peace-webfont.woff2')}}') format('woff2'),
        url('{{ asset('fonts/hvd_peace-webfont.woff')}}') format('woff');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'hvd_posterregular';
        src: local('HVD Poster Clean'), local('HVD-Poster-Clean'),
        url('{{ asset('fonts/hvd_poster_clean-webfont.woff2')}}') format('woff2'),
        url('{{ asset('fonts/hvd_poster_clean-webfont.woff')}}') format('woff');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'joystixmonospace';
        src: local('Joystix Monospace'), local('Joystix-Monospace'),
        url('{{ asset('fonts/joystix_monospace-webfont.woff2')}}') format('woff2'),
        url('{{ asset('fonts/joystix_monospace-webfont.woff')}}') format('woff');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }

    /* alata-regular - latin */
    @font-face {
        font-family: 'Alata';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Alata Regular'), local('Alata-Regular'),
        url('{{ asset('fonts/alata-v1-latin-regular.woff2')}}') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('{{ asset('fonts/alata-v1-latin-regular.woff')}}') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

    /* lora-regular - latin */
    @font-face {
        font-family: 'Lora';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Lora Regular'), local('Lora-Regular'),
        url('{{ asset('fonts/lora-v14-latin-regular.woff2')}}') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('{{ asset('fonts/lora-v14-latin-regular.woff')}}') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }
    /* lora-italic - latin */
    @font-face {
        font-family: 'Lora';
        font-style: italic;
        font-weight: 400;
        font-display: swap;
        src: local('Lora Italic'), local('Lora-Italic'),
        url('{{ asset('fonts/lora-v14-latin-italic.woff2')}}') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('{{ asset('fonts/lora-v14-latin-italic.woff')}}') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }
    /* lora-700 - latin */
    @font-face {
        font-family: 'Lora';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Lora Bold'), local('Lora-Bold'),
        url('{{ asset('fonts/lora-v14-latin-700.woff2')}}') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('{{ asset('fonts/lora-v14-latin-700.woff')}}') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }
    /* lora-700italic - latin */
    @font-face {
        font-family: 'Lora';
        font-style: italic;
        font-weight: 700;
        font-display: swap;
        src: local('Lora Bold Italic'), local('Lora-BoldItalic'),
        url('{{ asset('fonts/lora-v14-latin-700italic.woff2')}}') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
        url('{{ asset('fonts/lora-v14-latin-700italic.woff')}}') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
    }

</style>
