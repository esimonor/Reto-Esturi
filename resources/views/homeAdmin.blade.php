@include('includes.head')

<title>@lang('Perfil de') {{Auth::user()->name}}</title>

<link rel="stylesheet" href="{{ URL::asset('css/adminNavbar.css') }}">
</head>

<body>
    <div class="container col-12">
        @include('includes.navs.navUser')
        @include('includes.navs.vnav')

        <div class="row">
            <div class="col-12 row m-2 d-flex justify-content-center">
                <a href="{{ URL::asset('listUsers') }}" class="btn btn-primary col-3 m-1">Ver usuarios</a>
                <a href="{{ URL::asset('listEstablishments') }}" class="btn btn-primary col-3 m-1">Ver establecimientos</a>
                </div>
            </div>
        </div>

        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>