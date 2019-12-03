<!DOCTYPE html>
<html>
<head>
	<title>Esturi</title>
	    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
	<nav>
		<img id="logosmall" src="images/logosmall.png">
		<ul>
			<li><a href="#articulo2">¿Qué es Esturi?</a></li>
			<li><a href="#articulo3">Quiénes somos</a></li>
			<li><a href="#articulo4">Contacto</a></li>
			<li>Regístrarse</li>
			<li>Iniciar sesión</li>
			<li>ES</li>
			<li>EN</li>
		</ul>
	</nav>
	<article id="articulo1">
		<aside id="cajaSlogan">
			<h4 id="slogan">Encuentra lugares interesantes cerca de ti.</h4>
		</aside>
		<div>
            <input id="registro" type="button" name="Registrarse" value="Registrate">
            <br>
            <input id="mapa" type="button" name="mapa" value="Ver mapa">
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
</body>
</html>