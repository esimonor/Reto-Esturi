<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<a class="navbar-brand" href="{{ route('welcome') }}">
			<img src="{{ URL::asset('images/logosmall.png') }}" width="60" height="60" class="d-inline-block align-center" alt="">
			Esturi
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#articulo2">@lang('¿Qué es Esturi?')</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#articulo3">@lang('¿Quiénes somos?')</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#articulo4">@lang('Contacto')</a>
				</li>
				@guest
				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#inicioSesionModal">@lang('Inicio sesion')</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#registroModal">@lang('Registro')</a>
				</li>
				@else
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						{{ Auth::user()->name }}
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">@lang('Perfil')</a>
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">@lang('Cerrar sesion')</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</li>
				@endguest
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						@lang('Idiomas')
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="{{route('locale', ['locale' => 'es'])}}">Es</a>
						<a class="dropdown-item" href="{{route('locale', ['locale' => 'eu'])}}">Eu</a>
						<a class="dropdown-item" href="{{route('locale', ['locale' => 'en'])}}">En</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>