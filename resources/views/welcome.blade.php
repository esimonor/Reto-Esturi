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
	@include('includes.navLanding')

	<article class="text-center d-flex justify-content-center align-items-center mt-5" id="cajaSlogan">
		<div>
			<div>
				<h4 id="slogan">Encuentra lugares interesantes cerca de ti.</h4>
			</div>
			<div class="mt-5">
				@guest
				<a id="botonRegistro" class="btn btn-outline-success w-75 p-2" data-toggle="modal" data-target="#registroModal">Registrarse</a>
				<br><br>
				<a id="botonInicioSesion" href="{{route('mapa')}}" class="btn btn-outline-danger">Ver mapa</a>
				@else
				<a id="botonInicioSesion" href="{{route('home')}}" class="btn btn-outline-danger">Ver mapa</a>
				@endguest
			</div>
		</div>
	</article>

	<article id="articulo2" class="text-center d-flex align-items-center justify-content-center w-100">
		<div class="container2 container mt-5 mb-5">
			<div class="row mb-5">
				<div class="col">
					<h2 class="titulos"><u>¿Qué es Esturi?</u></h2>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col">
					<p class="textoArticulo">Esturi es una aplicacion creada para que disfrutes al maximo de la ciudad en la que te encuentres.</p>
				</div>
			</div>
			<div class="row d-flex justify-content-between mb-5" id="tarjetas">
				<div class="col tarjeta1">
					<img class="iconos" src="images/lupa.png">
					<h3 class="titulo-tarjeta mt-4">Busqueda</h3>
					<p class="contenido-tarjeta">Esturi te permite elegir entre una gran variedad de actividades y lugares.</p>
				</div>
				<div class="col tarjeta2 text-center">
					<img class="iconos" src="images/lista.png">
					<h3 class="titulo-tarjeta mt-4">Filtra</h3>
					<p class="contenido-tarjeta">Filtra las actividades que mas te interesen.</p>
				</div>
				<div class="col tarjeta3">
					<img class="iconos" src="images/lista.png">
					<h3 class="titulo-tarjeta mt-4">Lorem ipsum</h3>
					<p class="contenido-tarjeta">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
		</div>
	</article>

	<article id="articulo3" class="text-center d-flex align-items-center justify-content-center w-100">
		<div class="container2 container mt-5 mb-5">
			<div class="row mb-5">
				<div class="col">
					<h2 class="titulos"><u>¿Quiénes somos?</u></h2>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col">
					<p class="textoArticulo">Somos tres estudiantes de segundo año de grado superior</p>
				</div>
			</div>
			<div class="row d-flex justify-content-between mb-5" id="tarjetas">
				<div class="col tarjeta1">
					<img class="caras" src="images/AG.png">
					<h3 class="titulo-tarjeta mt-4">Adrian</h3>
					<p class="contenido-tarjeta">Jefe</p>
				</div>
				<div class="col tarjeta2">
					<img class="caras" src="images/AO.png">
					<h3 class="titulo-tarjeta mt-4">Aitor</h3>
					<p class="contenido-tarjeta">Ayudante</p>
				</div>
				<div class="col tarjeta3">
					<img class="caras" src="images/EO.png">
					<h3 class="titulo-tarjeta mt-4">Eneko</h3>
					<p class="contenido-tarjeta">Diseño Grafico</p>
				</div>
			</div>
		</div>
	</article>

	<article id="articulo4">
		<div class="container">
			<h2 class="titulos text-center"><u>Contacto</u></h2>
			<form class="">
				<div class="form-group">
					<label class="textoArticulo">Nombre</label>
					<input type="text" class="form-control" id="contra" placeholder="Password">
				</div>
				<div class="form-group">
					<label class="textoArticulo">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label class="textoArticulo">Mensaje</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
				<button type="submit" class="mb-5 btn btn-danger">Enviar</button>
			</form>
		</div>
	</article>
	@include('includes.footer')
	@include('includes.js')
</body>

</html>