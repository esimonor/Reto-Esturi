@include('includes.head')
<!-- Estilos Landing page -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/LandingPage.css') }}">
<!-- Fuentes Lanfing page-->
<link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Lato&display=swap') }}" rel="stylesheet">
<title>Esturi</title>
</head>

<body class="w-100">
	@include('includes.navs.navLanding')

	<article class="text-center d-flex justify-content-center align-items-center mt-5" id="cajaSlogan">
		<div>
			<div>
				<h4 id="slogan">@lang('Encuentra lugares interesantes cerca de ti').</h4>
			</div>
			<div class="mt-5">
				@guest
				<a id="botonRegistro" class="btn btn-outline-success w-75 p-2" data-toggle="modal" data-target="#registroModal">@lang('Registrarse')</a>
				<br><br>
				<a id="botonInicioSesion" class="btn btn-outline-danger mr-4" data-toggle="modal" data-target="#inicioSesionModal">@lang('Inicio sesion')</a>
				<a id="botonInicioSesion" href="{{route('mapa')}}" class="btn btn-outline-danger">@lang('Ver mapa')</a>
				@else
				<a id="botonInicioSesion" href="{{route('home')}}" class="btn btn-outline-danger">@lang('Ver mapa')</a>
				@endguest
			</div>
		</div>
	</article>

	<article id="articulo2" class="text-center d-flex align-items-center justify-content-center w-100">
		<div class="container2 container mt-5 mb-5">
			<div class="row mb-5">
				<div class="col">
					<h2 class="titulos"><u>@lang('¿Qué es Esturi?')</u></h2>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col">
					<p class="textoArticulo">@lang('Esturi es una aplicacion creada para que disfrutes al maximo de la ciudad en la que te encuentres').</p>
				</div>
			</div>
			<div class="row d-flex justify-content-between mb-5" id="tarjetas">
				<div class="col-xl-4 col-md-12 tarjeta1">
					<img class="iconos" src="{{ URL::asset('images/lupa.png') }}">
					<h3 class="titulo-tarjeta mt-4">@lang('Busqueda')</h3>
					<p class="contenido-tarjeta">@lang('Esturi te permite elegir entre una gran variedad de actividades y lugares').</p>
				</div>
				<div class="col-xl-4 col-md-12 tarjeta2 text-center">
					<img class="iconos" src="{{ URL::asset('images/lista.png') }}">
					<h3 class="titulo-tarjeta mt-4">@lang('Filtra')</h3>
					<p class="contenido-tarjeta">@lang('Filtra las actividades que mas te interesen').</p>
				</div>
				<div class="col-xl-4 col-md-12 tarjeta3">
					<img class="iconos" src="{{ URL::asset('images/comentario.png') }}">
					<h3 class="titulo-tarjeta mt-4">@lang('Comentarios')</h3>
					<p class="contenido-tarjeta">@lang('Valora los sitios que has visitado').</p>
				</div>
			</div>
		</div>
	</article>

	<article id="articulo3" class="text-center d-flex align-items-center justify-content-center w-100">
		<div class="container2 container mt-5 mb-5">
			<div class="row mb-5">
				<div class="col">
					<h2 class="titulos"><u>@lang('¿Quiénes somos?')</u></h2>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col">
					<p class="textoArticulo">@lang('Somos tres estudiantes de segundo año de grado superior')</p>
				</div>
			</div>
			<div class="row d-flex justify-content-between mb-5" id="tarjetas">
				<div class="col tarjeta1">
					<img class="caras" src="{{ URL::asset('images/AG.png') }}">
					<h3 class="titulo-tarjeta mt-4">Adrián G.</h3>
					<p class="contenido-tarjeta">@lang('Jefe, diseñador y programador')</p>
				</div>
				<div class="col tarjeta2">
					<img class="caras" src="{{ URL::asset('images/AO.png') }}">
					<h3 class="titulo-tarjeta mt-4">Aitor O.</h3>
					<p class="contenido-tarjeta">@lang('Administrador')</p>
				</div>
				<div class="col tarjeta3">
					<img class="caras" src="{{ URL::asset('images/EO.png') }}">
					<h3 class="titulo-tarjeta mt-4">Eneko S.</h3>
					<p class="contenido-tarjeta">@lang('Diseño Grafico')</p>
				</div>
			</div>
		</div>
	</article>

	<article id="articulo4">
		<div class="container">
			<h2 class="titulos text-center"><u>@lang('Contacto')</u></h2>
			<form class="">
				<div class="form-group">
					<label class="textoArticulo">@lang('Nombre')</label>
					<input type="text" class="form-control" id="contra" placeholder="@lang('Nombre')">
				</div>
				<div class="form-group">
					<label class="textoArticulo">@lang('Correo Electronico')</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="@lang('Correo Electronico')">
				</div>
				<div class="form-group">
					<label class="textoArticulo">@lang('Mensaje')</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
				<button type="submit" class="mb-5 btn btn-danger">@lang('Enviar')</button>
			</form>
		</div>
	</article>
	@include('includes.footer')
	@include('includes.js')
</body>

</html>