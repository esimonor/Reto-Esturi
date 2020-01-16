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
            @if (Auth::user()->role=='owner')
                <a href="{{route('addlocal')}}" class="btn btn-primary m-2 col-8">Añadir local</a>
            @endif
            @if (Auth::user()->role=='user')
                <a href="{{route('solicitud.edit', $solicitud->id)}}" class="btn btn-primary m-2 col-8" data-toggle="modal" data-target="#SolicitarModal">Solicitar</a>
            @endif
        
        </div>
        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>