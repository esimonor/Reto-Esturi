@include('includes.head')

<title>@lang('Perfil de') {{Auth::user()->name}}</title>
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/profile.css') }}">
</head>

<body>
    <div class="row">
        <div class="col-12">
    @include('includes.navs.navUser')
        </div>
    </div>
    <!-- Guarda la id del usuario en variable de sesion para usar en controladores hasta encontrar otra mejor forma -->
    <?php $id=Auth::user()->id;session(['id' => $id]); ?>
    <div class="container col-12">

        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="row">
            <div class="alturaForm col-xl-6 col-lg-6 col-md-12 col-sm-12 row m-2">
                <div class="col-12">
                <h4 class="titulos col-12">Informacion de usuario</h4>
                <!--<img src="{{ URL::asset('images/profile.png') }}" class="m-2 border rounded col-10">-->
                <p class="titulos col-6">Nombre:  {{Auth::user()->name}}</p>
                <p class="titulos col-6">Apellido: {{Auth::user()->lastName}}</p>
                <p class="titulos col-10">Correo:  {{Auth::user()->email}}</p>
                <p class="titulos col-10">Tu rol:  {{Auth::user()->role}}</p>
                <a href="{{route('addlocal')}}" class="btn btn-primary m-2 col-8">Añadir local</a>             
                <a href="{{ URL::asset('modprofile') }}" class="btn btn-warning m-2 col-8">Modificar cuenta</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 row">
                    @foreach($sites as $site)
                    <div class="col-6">
                        <div class="tarjetas">
                            <img src="images/{{$site->rutaactual}}" class="m-2 rounded col-12">
                            <p>Nombre: {{ $site->name }}</p>
                            <p>Tipo de establecimiento: {{ $site->type}}</p>
                            <p>Localización: {{ $site->localization }}</p>
                            <a class="btn btn-info" value="{{$site->id}}" href="{{route('editlocal',[$site->id])}}">Modificar local</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
    @include('includes.js')
    @include('includes.footer')
        </div>
    </div>
</body>

</html>