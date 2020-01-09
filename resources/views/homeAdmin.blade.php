@include('includes.head')

<title>@lang('Perfil de') {{Auth::user()->name}}</title>
</head>

<body>
    <div class="container col-12">
        @include('includes.navs.navUser')

        <div class="row">
            <div class="col-12 row m-2 d-flex justify-content-center">
                <h4 class="d-flex justify-content-center col-9 m-1">Usuario administrador:{{Auth::user()->name}} {{Auth::user()->lastName}}</h4>
                <a type="button" href="{{ URL::asset('listUsers') }}" class="btn btn-primary col-3 m-1">Ver usuarios</a>
                <a type="button" href="{{ URL::asset('listEstablishments') }}" class="btn btn-primary col-3 m-1">Ver establecimientos</a>
                <input type="button" value="Ver comentarios" class="btn btn-primary col-3 m-1" />
                </div>
            </div>
        </div>

        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>