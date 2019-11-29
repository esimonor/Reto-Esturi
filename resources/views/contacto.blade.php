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
    <!-- Formulario -->
    <link rel="stylesheet" href="{{ URL::asset('css/formularioCSS.css') }}" />
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
                    <!-- Inicio de sesion -->
                    <label class="text-white">Inicio de sesion</label>
                    <form class="form-inline">
                        <div class="input-group col">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Email</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" id="email">
                        </div>
                        <div class="input-group col">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Contraseña</span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" aria-label="contra" aria-describedby="basic-addon1" id="contraseña">
                        </div>
                        <button class="btn btn-outline-success" type="button">Iniciar Sesion</button>
                    </form>
                    <div class="dropdown-divider"></div>
                    <!-- Registrarse -->
                    <label class="text-white">Registrarse</label>
                    <button class="btn btn-outline-success" type="button">Registrarse</button>
                </ul>
            </div>
        </nav>
        <!-- Formulario -->
        <div id="formulario">
            <h1>Formulario de contacto</h1>
            <form>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nombre*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email*</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Mensaje*</label>
                    <div class="col-sm-10">
                        <textarea type="textarea" class="form-control" placeholder="Mensaje" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Terminos & condificiones</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                He leido y acepto los terminos y condiciones*
                            </label>
                            <br>
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Deseo recibir informacion sobre futuras posibles ofertas*
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-outline-success">Enviar consulta</button>
                    </div>
                </div>
            </form>
            <p><i>*Campos obligatorios</i></p>
        </div>
        <!-- Footer -->
        <footer class="page-footer font-small bg-dark">
            <div class="row justify-content-between">
                <div class="col-4 align-self-center text-white pl-4">
                    <b><u>Email de Contacto: </u></b><br>esturioficial@gmail.com
                </div>
                <!-- Copyright -->
                <div class="col-4 align-self-center text-center text-white">&copy 2019 Copyright:
                    <a href="{{URL::asset('https://mdbootstrap.com/education/bootstrap/')}}"> Esturi.com</a>
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