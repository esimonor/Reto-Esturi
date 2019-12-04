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