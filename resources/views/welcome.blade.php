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
    <!-- Mapa -->
    <!-- Load Leaflet from CDN -->
    <link rel="stylesheet" href="{{ URL::asset('https://unpkg.com/leaflet@1.5.1/dist/leaflet.css') }}" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
    <script src="{{ URL::asset('https://unpkg.com/leaflet@1.5.1/dist/leaflet.js') }}" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
    <!-- Load Esri Leaflet from CDN -->
    <script src="https://unpkg.com/esri-leaflet@2.3.2/dist/esri-leaflet.js" integrity="sha512-6LVib9wGnqVKIClCduEwsCub7iauLXpwrd5njR2J507m3A2a4HXJDLMiSZzjcksag3UluIfuW1KzuWVI5n/cuQ==" crossorigin=""></script>
    <!-- Load Esri Leaflet Geocoder from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.3.2/dist/esri-leaflet-geocoder.css" integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g==" crossorigin="">
    <script src="https://unpkg.com/esri-leaflet-geocoder@2.3.2/dist/esri-leaflet-geocoder.js" integrity="sha512-8twnXcrOGP3WfMvjB0jS5pNigFuIWj4ALwWEgxhZ+mxvjF5/FBPVd5uAxqT8dd2kUmTVK9+yQJ4CmTmSg/sXAQ==" crossorigin=""></script>
    <!-- CSS y JS Personal Mapa -->
    <link rel="stylesheet" href="{{ URL::asset('css/mapacss.css') }}">
    <script src="{{ URL::asset('js/mapa.js') }}"></script>

    <link rel="stylesheet" href="{{ URL::asset('css/botoncss.css') }}">
    <title>Esturi</title>
</head>

<body>
    <div class="container col-12">
        <!-- Nav -->
        <nav class="navbar bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="{{route('welcome')}}">Esturi</a>

            <div>
                <div id="basemaps-wrapper" class="leaflet-bar">
                    <select id="basemaps" class="form-control">
                        <option value="Physical">Physical</option>
                        <option value="Imagery">Imagery</option>
                        <option value="ImageryClarity">Imagery (Clarity)</option>
                        <option value="ImageryFirefly">Imagery (Firefly)</option>
                        <option value="Streets">Streets</option>
                    </select>
                </div>
            </div>

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
                    <form class="form-inline" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group col">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Email</span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" aria-label="Email" aria-describedby="basic-addon1" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input-group col">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Contraseña</span>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" aria-label="contra" aria-describedby="basic-addon1" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button class="btn btn-outline-success" type="submit">Iniciar Sesion</button>
                        <div class="form-group col">
                            <div class="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                            <div class="col">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                            @endif
                        </div>
                    </form>
                    <div class="dropdown-divider"></div>
                    <!-- Registrarse -->
                    <label class="text-white">Registrarse</label>
                    <a href="/register" id="botonRegistro" class="btn p-2 m-1"><b style="font-size:1.2em;">Registrarse</b></a>
                </ul>
            </div>
        </nav>
        <!-- Mapa -->
        <div id="map"></div>
        <!-- Footer -->
        <footer class="page-footer font-small bg-dark">
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