@include('includes.head')

<title>@lang('Perfil de') {{Auth::user()->name}}</title>
</head>

<body>
    <div class="container col-12">
        @include('includes.navs.navUser')

        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="row">
            <div class="col-6 row m-2">
                <h4 class="col-12">Informacion de usuario</h4>
                <!--<img src="{{ URL::asset('images/profile.png') }}" class="m-2 border rounded col-10">-->
                <p class="h5 col-4">Nombre:  {{Auth::user()->name}}</p>
                <p class="h5 col-4">Apellido: {{Auth::user()->lastName}}</p>
                <p class="h5 col-10">Correo:  {{Auth::user()->email}}</p>
                <p class="h5 col-10">Tu rol:  {{Auth::user()->role}}</p>
                @if (Auth::user()->role=="owner")
                <a href="{{route('addlocal')}}" class="btn btn-primary m-2 col-8">Añadir local</a>
                @endif
                
                <button class="btn btn-outline-danger m-2 col-4">Eliminar cuenta</button>
                <a href="{{ URL::asset('modprofile') }}" class="btn btn-outline-warning m-2 col-4">Modificar cuenta</a>
            </div>

            <div class="col-4">
                <div>
                    <h4>Tu establecimiento</h4>
                    <hr>
                    <img src="{{ URL::asset('images/museum.png') }}" class="m-2 border rounded col-8">
                    <p>Nombre:</p>
                    <p>Dueñ@: {{Auth::user()->name}} {{Auth::user()->lastName}}</p>
                    <p>Valoración:</p>
                </div>
            </div>
        </div>

        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>