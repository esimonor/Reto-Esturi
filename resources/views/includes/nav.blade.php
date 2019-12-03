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
                <a href="{{route('locale', ['locale' => 'es'])}}">Español</a>
                <a href="{{route('locale', ['locale' => 'eu'])}}">Euskera</a>
                <a href="{{route('locale', ['locale' => 'en'])}}">Ingles</a>
            </li>
            <div class="dropdown-divider"></div>
            <!-- Inforacion y Contacto -->
            <li class="nav-item">
                <a class="nav-link" href="#">@lang('¿Quienes somos?')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contacto')}}">Contacto</a>
            </li>
            <div class="dropdown-divider"></div>
            @guest
            <!-- Inicio de sesion -->
            <label class="text-white">Inicio de sesion</label>
            <!-- Button modal Inicio de sesion-->
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#inicioSesionModal">
                <b style="font-size:1.2em;">Inicio sesion</b></a>
            </button>
            <!-- Modal Resgistro-->
            @include('includes.modales.modalInicioSesion')
            <div class="dropdown-divider"></div>
            <!-- Registrarse -->
            <label class="text-white">Registrarse</label>
            <!-- Button modal Resgistro-->
            <button type="button" id="botonRegistro" class="btn p-2 m-1" data-toggle="modal" data-target="#registroModal">
                <b style="font-size:1.2em;">Registrarse</b></a>
            </button>
            <!-- Modal Resgistro-->
            @include('includes.modales.modalRegistro')
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