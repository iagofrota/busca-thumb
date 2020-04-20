<!DOCTYPE html>
<html lang="pt-br">

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

	<title>{{ config('app.name') }}</title>

	<meta charset="UTF-8">
	<meta name="generator" content="Laravel">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
	<meta name="author" content="Iago Olímpio Frota">
	<meta name="creator" content="Iago Olímpio Frota">
	<meta name="description" content="Uma forma fácil e rápida para pegar a miniatura de um vídeo no Youtube!">
	<meta name="keywords" content="thumb, thumbnails, miniatura, youtube">
	<meta name="reply-to" content="iagofrota10@gmail.com">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta property="og:locale" content="pt_BR">
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{ config('app.name') }}">
	<meta property="og:description" content="Uma forma fácil e rápida para pegar a miniatura de um vídeo no Youtube!">
	<meta property="og:url" content="https://buscathumb.com.br/">
	<meta property="og:site_name" content="{{ config('app.name') }}">


	<link rel=canonical href=https://buscathumb.com.br/>

	<!-- CSS  -->
	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
<nav class="red darken-1" role="navigation">
	<div class="nav-wrapper container"><a id="logo-container" href="{{ url('/') }}"
	                                      class="brand-logo">{{ config('app.name') }}</a>
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
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">Sobre</h5>
				<p class="grey-text text-lighten-4">Apenas um projeto pessoal para buscar miniaturas
					do Youtube</p>

			</div>
			<div class="col l3 s12">
				<h5 class="white-text">Links</h5>
				<ul>
					<li><a class="white-text" href="{{ url('/') }}">Início</a></li>
					<li><a class="white-text" href="{{ url('/contato') }}">Contato</a></li>
					<li><a class="white-text" href="https://iagofrota.com.br" target="_blank">Meu site</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			Made by <a class="orange-text text-lighten-3" href="https://iagofrota.com.br" target="_blank">Iago
				Frota</a>
		</div>
	</div>
</footer>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
