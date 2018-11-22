<!--
@guest
<div id="header" style="padding: 1.2em 0 2em 0;">
@else
<div id="header">
@endguest
	@guest
	@else
		<div class="inner">
			<header>
				<h1><a href="/" id="logo">Helios</a></h1>
			</header>
		</div>
	@endguest
	<nav id="nav">
		<ul>

			@guest
				<li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
				<li><a href="{{ route('register') }}">Registrarse</a></li>
			@else
				<li><a href="/">Home</a></li>
				<li>
					<a href="#">Contenido</a>
					<ul>
						<li><a href="#">Reciente</a></li>
						<li><a href="#">Lo mรกs valorado</a></li>
					</ul>
				</li>
				<li><a href="{{ route('search') }}">Buscar</a></li>
				<li><a href="{{ route('profile') }}">Perfil</a></li>
				<li><a href="/">Salir</a></li>
			@endguest

		</ul>
	</nav>

</div>
-->

<div id="header">
		<div class="inner">
			<header>
				<h1><a href="/" id="logo">@yield('header-title')</a></h1>
			</header>
		</div>
		
	<nav id="nav">
		<ul>

				<li><a href="/">Home</a></li>
				<li>
					<a href="#">Contenido</a>
					<ul>
						<li><a href="{{route('explore')}}">Reciente</a></li>
						<li><a href="{{route('explore')}}">Lo más valorado</a></li>
					</ul>
				</li>
				<li><a href="{{ route('profile') }}">Perfil</a></li>
				<li><a href="/">Salir</a></li>
		</ul>
	</nav>

</div>