<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('welcome')}}">
        <img src="{{ URL::asset('images/logosmall.png') }}" width="60" height="60" class="d-inline-block align-center" alt="">
        Esturi
    </a>
    <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>-->

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto flex-row-reverse">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('Idiomas')
                </a>
                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item bg-dark text-light" href="{{route('locale', ['locale' => 'es'])}}">Es</a>
                    <a class="dropdown-item bg-dark text-light" href="{{route('locale', ['locale' => 'eu'])}}">Eu</a>
                    <a class="dropdown-item bg-dark text-light" href="{{route('locale', ['locale' => 'en'])}}">En</a>
                </div>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#inicioSesionModal">@lang('Inicio sesion')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#registroModal">@lang('Registro')</a>
                </li>
            @else
                
                <li class="nav-item dropdown align-items-end">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                        @if (Auth::user()->role=="owner")
                            <a class="dropdown-item bg-dark text-light" href="{{ URL::asset('homeOwner') }}">@lang('Perfil')</a>  
                        @endif
                        @if (Auth::user()->role=="user")
                            <a class="dropdown-item bg-dark text-light" href="{{ URL::asset('profile') }}">@lang('Perfil')</a>
                        @endif
                        @if (Auth::user()->role=="admin")
                            <a class="dropdown-item bg-dark text-light" href="{{ URL::asset('homeAdmin') }}">Administrar página</a>
                        @endif
                        <a class="dropdown-item bg-dark text-light" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">@lang('Cerrar sesion')</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @if(Auth::user()->role=="owner")
                    <li class="nav-item">
                        <a class="nav-link text-center" href="{{URL::asset('mySites')}}">Mis sitios</a>
                    </li>
                @endif
                    <li class="nav-item">
					    <a class="nav-link text-center" href="{{ URL::asset('gustos/create') }}">Mis categorías</a>
				    </li>
            @endguest
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('Tipo de mapa')
                </a>
                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item basemaps bg-dark text-light" id="Physical">@lang('Fisico')</a>
                    <a class="dropdown-item basemaps bg-dark text-light" id="Imagery">@lang('Satelite')</a>
                    <a class="dropdown-item basemaps bg-dark text-light" id="ImageryClarity">@lang('Satelite (Claro)')</a>
                    <a class="dropdown-item basemaps bg-dark text-light" id="ImageryFirefly">@lang('Satelite (Luciernaga)')</a>
                    <a class="dropdown-item basemaps bg-dark text-light" id="Streets">@lang('Calles')</a>
                </div>
            </li>
        </div>
        </ul>
    </div>
</nav>