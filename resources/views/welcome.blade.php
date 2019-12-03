@include('includes.head')
@include('includes.modales.modalInicioSesion')
@include('includes.modales.modalRegistro')
<!-- Estilos Landing page -->
<link rel="stylesheet" type="text/css" href="css/LandingPage.css">
<!-- Fuentes Lanfing page-->
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
<title>Esturi</title>
</head>

<body class="w-100">
	<nav id="navbar"class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<a class="navbar-brand" href="#">
			<img src="images/logosmall.png" width="60" height="60" class="d-inline-block align-center" alt="">
			Esturi
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#articulo2">¿Qué es Esturi?</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#articulo3">¿Quiénes somos?</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#articulo4">Contacto</a>
				</li>
				@guest
				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#inicioSesionModal">Inicio sesion</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#registroModal">Registro</a>
				</li>
				@else
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						{{ Auth::user()->name }}
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Perfil</a>
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</li>
				@endguest
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Idiomas
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Es</a>
						<a class="dropdown-item" href="#">Eu</a>
						<a class="dropdown-item" href="#">En</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<article class="text-center d-flex justify-content-center align-items-center mt-5" id="cajaSlogan">
		<div>
			<div >
				<h4 id="slogan">Encuentra lugares interesantes cerca de ti.</h4>
			</div>
			<div class="mt-5" >
				@guest
				<a id="botonRegistro" class="btn btn-outline-success w-75 p-2" data-toggle="modal" data-target="#registroModal">Registrarse</a>
				<br><br>
				<a id="botonInicioSesion" href="{{route('mapa')}}" class="btn btn-outline-danger">Ver mapa</a>
				@else
				<a is="botonInicioSesion" href="{{route('home')}}" class="btn btn-outline-danger">Ver mapa</a>
				@endguest
			</div>
		</div>
	</article>

	<br>
	<hr>
	<br>

	<article style="background-color: #28a745;" id="articulo2">
		<h2 class="titulos">¿Qué es Esturi?</h2>
		<hr class="separador">
		<p class="textoArticulo">Esturi es una aplicacion creada para que disfrutes al maximo de la ciudad en la que te encuentres.</p>
		<div id="tarjetas">
			<div class="tarjeta1">
				<img class="iconos" src="images/lupa.png">
				<h3 class="titulo-tarjeta">Busqueda</h3>
				<p class="contenido-tarjeta">Esturi te permite elegir entre una gran variedad de actividades y lugares.</p>
			</div>
			<div class="tarjeta2">
				<img class="iconos" src="images/lista.png">
				<h3 class="titulo-tarjeta">Filtra</h3>
				<p class="contenido-tarjeta">Filtra las actividades que mas te interesen.</p>
			</div>
			<div class="tarjeta3">
				<img class="iconos" src="images/lista.png">
				<h3 class="titulo-tarjeta">Lorem ipsum</h3>
				<p class="contenido-tarjeta">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
		</div>
	</article>

	<br>
	<hr>
	<br>

	<article style="background-color: #28a745;" id="articulo3">
		<h2 class="titulos">Quiénes somos</h2>
		<hr class="separador">
		<p class="textoArticulo">Somos tres estudiantes de segundo año de grado superior</p>
		<div id="tarjetas">
			<div style="margin: 0px;" class="tarjeta1">
				<img class="iconos" src="images/AG.png">
				<h3 class="titulo-tarjeta">Adrian</h3>
			</div>
			<div class="tarjeta2">
				<img class="iconos" src="images/AO.png">
				<h3 class="titulo-tarjeta">Aitor</h3>
			</div>
			<div class="tarjeta3">
				<img class="iconos" src="images/EO.png">
				<h3 class="titulo-tarjeta">Eneko</h3>
			</div>
		</div>
	</article>

	<br>
	<hr>
	<br>

	<article style="background-color: #28a745;" id="articulo4">
		<h2 class="titulos">Contacto</h2>
		<hr class="separador">
		<label class="textoArticulo">Nombre:</label> <input type="text" name="nombre" id="nombre">
		<br>
		<label class="textoArticulo">Correo:</label> <input type="text" name="correo" id="correo">
		<br>
		<label class="textoArticulo">Mensaje:</label> <textarea name="nombre" id="nombre"></textarea>
		<br>
		<button>Enviar</button>
	</article>
	@include('includes.footer')
	@include('includes.js')
</body>

</html>