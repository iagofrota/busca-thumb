<!DOCTYPE html>
<html lang="pt-BR">

<head>
    @if (env('APP_ENV') !== 'local')
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-7879119279166223",
                enable_page_level_ads: true
            });
        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138941596-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'UA-138941596-1');
        </script>
    @endif

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <meta name="description" content="Pega miniaturas do Youtube"/>
    <meta name="keywords" content="thumb, thumbnails, pegar, pegar, miniatura, youtube, buscar, busca"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>{{ config('app.name') }}</title>

    <!-- CSS  -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
<nav class="red darken-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="{{ url('/') }}" class="brand-logo">BuscaThumb</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ url('/') }}">Início</a></li>
            <li><a href="{{ url('/contato') }}">Contato</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="{{ url('/') }}">Início</a></li>
            <li><a href="{{ url('/contato') }}">Contato</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>

        @yield('content')

    </div>
</div>

<footer class="page-footer red darken-1">
    <div class="footer-copyright">
        <div class="container">

        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
