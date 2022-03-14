<link rel="preload" as="font" href="{{ asset('fonts/hvd_peace-webfont.woff2')}}" type="font/woff2" crossorigin="anonymous">
<link rel="preload" as="font" href="{{ asset('fonts/hvd_peace-webfont.woff')}}" type="font/woff" crossorigin="anonymous">
<link rel="preload" as="font" href="{{ asset('fonts/hvd_poster-webfont.woff2')}}" type="font/woff2" crossorigin="anonymous">
<link rel="preload" as="font" href="{{ asset('fonts/hvd_poster-webfont.woff')}}" type="font/woff" crossorigin="anonymous">
<link rel="preload" as="font" href="{{ asset('fonts/opensans.ttf')}}" type="font/ttf" crossorigin="anonymous">

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

    /* open sans */
    @font-face {
        font-family: 'opensans';
        font-display: swap;
        font-weight: 300 800;
        src: local('Open Sans'), local('Open-Sans'),
        url('{{ asset('fonts/opensans.ttf')}}') format('truetype');
    }

</style>
