@include('includes.head')

<title>@lang('Perfil de') {{Auth::user()->name}}</title>
</head>

<body>
    <!-- Guarda la id del usuario en variable de sesion para usar en controladores hasta encontrar otra mejor forma -->
    <?php $id=Auth::user()->id;session(['id' => $id]); ?>
    <div class="container col-12">
        @include('includes.navs.navUser')

        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="row">
            @if (isset($sites))
                @foreach($sites as $site)
                    @include('includes/site')
                @endforeach
            @endif
        </div>
        <div class="container col-4">
        <a href="{{route('addlocal')}}" class="btn btn-primary m-2 col-8">Añadir local</a>
        </div>
        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>