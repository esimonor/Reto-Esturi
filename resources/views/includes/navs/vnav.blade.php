<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-light">
            <div class="media d-flex align-items-center"><a href="{{ route('homeAdmin') }}"><img src="{{ URL::asset('images/logosmall.png') }}" alt="logo" width="65" class="mr-3 rounded img-thumbnail shadow-sm"></a>
            <div class="media-body">
                <h4 class="m-0">{{Auth::user()->name}} {{Auth::user()->lastName}}</h4>
                <p class="font-weight-light text-muted mb-0">{{Auth::user()->role}}</p>
            </div>
            </div>
        </div>

        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
            <a href="{{ URL::asset('homeAdmin') }}" class="nav-link text-dark font-italic bg-light">
                        <i class="fa fa-home mr-3 text-primary fa-fw" aria-hidden="true"></i>
                        Home
                    </a>
            </li>
            <li class="nav-item">
            <a href="{{ URL::asset('listUsers') }}" class="nav-link text-dark font-italic bg-light">
                        <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                        Listar usuarios
                    </a>
            </li>
            <li class="nav-item">
            <a href="{{ URL::asset('listEstablishments') }}" class="nav-link text-dark font-italic bg-light">
                        <i class="fa fa-university -large mr-3 text-primary fa-fw"></i>
                        Listar establecimientos
                    </a>
            </li>
           
        </ul>

        <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Otras funciones</p>

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
            <a href="{{ route('mapa') }}" class="nav-link text-dark font-italic bg-light">
                        <i class="fa fa-map mr-3 text-primary fa-fw"></i>
                        Mapa
                    </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('profile') }}" class="nav-link text-dark font-italic bg-light">
                    <i class="fa fa-user mr-3 text-primary fa-fw" aria-hidden="true"></i>
                        Perfil
                    </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link text-dark font-italic bg-light">
                            <i class="fa fa-sign-out mr-3 text-primary fa-fw"></i>
                            Log out
                        </a>
                </li>
        </ul>
        </div>

        <!-- End vertical navbar -->