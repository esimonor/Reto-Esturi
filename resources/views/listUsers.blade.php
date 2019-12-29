@include('includes.head')

<title>@lang('Perfil de') {{Auth::user()->name}}</title>
</head>

<body>
    <div class="container col-12">
        @include('includes.navs.navUser')

        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="row">
            <div class="col-12 row m-2 d-flex justify-content-center">
                <h4 class="d-flex justify-content-center col-9 m-1">Usuario administrador:{{Auth::user()->name}} {{Auth::user()->lastName}}</h4>
                <a type="button" class="btn btn-primary col-3 m-1" href="{{ URL::asset('homeAdmin') }}">Volver</a>
                </div>
            </div>
        </div>

        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>