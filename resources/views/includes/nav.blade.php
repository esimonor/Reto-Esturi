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
            @guest
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
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</nav>