<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- JQuery -->
    <script src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}">
    <!-- Botones -->
    <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/cssBotones.css') }}" />
    <!-- Perfil -->
    <link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}">

    <title>Esturi</title>
</head>

<body>
    <div class="container col-12">
        <!-- Nav -->
        <nav class="navbar bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="{{route('welcome')}}">Esturi</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <!-- Idiomas -->
                    <li class="nav-item inline">
                        <label class="text-white">Idioma</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Español</option>
                            <option>Euskera</option>
                            <option>Ingles</option>
                        </select>
                    </li>
                    <div class="dropdown-divider"></div>
                    <!-- Inforacion y Contacto -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">¿Quienes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contacto')}}">Contacto</a>
                    </li>
                    <div class="dropdown-divider"></div>
                   
                </ul>
            </div>
        </nav>
        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="row">
            <div class="col-6 row">
                <img src="{{ URL::asset('images/profile.png') }}" class="m-2 border rounded col-10">
                <p class="h5 col-5">Nombre:John Doe</p>
                <p class="h5 col-5">Correo:example@gmail.com</p>
                <button class="btn btn-outline-danger m-2 col-4">Eliminar cuenta</button>
                <button class="btn btn-outline-warning m-2 col-4">Modificar cuenta</button>
            </div>
            <!-- Listado de lugares favoritos -->
            <div class="col-3">
                <div class="border bg-light">
                <h4>Lugares favoritos</h4>
                <div class="dropdown-divider"></div>
                <p>No se han encontrado lugares favoritos</p>
                </div>
            </div>
            <!-- Comentarios -->
            <div class="col-3">
                <div class="border bg-light">
                <h4>Comentarios</h4>
                <div class="dropdown-divider"></div>
                <p>No se han encontrado comentarios</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="page-footer font-small bg-dark col-12">
            <div class="row justify-content-between">
                <div class="col-4 align-self-center text-white pl-4">
                    <b><u>Email de Contacto: </u></b><br>esturioficial@gmail.com
                </div>
                <!-- Copyright -->
                <div class="col-4 align-self-center text-center text-white">© 2019 Copyright:
                    <a href="{{ URL::asset('https://mdbootstrap.com/education/bootstrap/') }}"> Esturi.com</a>
                </div>
                <!-- Add font awesome icons -->
                <div class="col-4  align-self-center d-flex flex-row-reverse">
                    <a href="#" class="fa fa-youtube mr-3"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-facebook "></a>
                </div>
            </div>
        </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- Popper.js, then Bootstrap JS -->
    <script src="{{ URL::asset('js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>