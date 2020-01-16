@include('includes.head')
@include('includes.mapa')
<title>@lang('Añadir local')</title>

</style>
</head>
<body>
    <div class="container col-12">
        @include('includes.navs.navUser')

        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="row d-flex justify-content-center">
            <div class="col-6 row">
                @foreach($site as $ruta)
                <!--<img src="images/{{$ruta->rutaactual}}" class="m-2 border rounded col-10">-->
                <img src="images/{{$ruta->rutaactual}}" class="m-2 border rounded col-10">
                @endforeach
                
            <form class="col-3" method="POST" action="/sitio">
                @csrf
                <input type="hidden" name="favorito" value="1">
                <input type="hidden" name="form" value="fav">
                <input type="hidden" name="id" value="{{$idd}}">
                <input type="hidden" name="idusuario" value="{{Auth::user()->id}}">

                
                <button class="btn btn-outline-success m-2 col-4">fav</button>
            </form>
            </div>
        </div>
        <div class="col-3 " >
            <div class="border">
                <h4>comentarios de los clientes</h4>
                <div class="dropdown-divider"></div>
                <div class="container">
                <form class="col-3" method="POST" action="/sitio">
                @csrf
                <input type="text" name="comentario">
                <input type="hidden" name="form" value="com"> 
                <input type="hidden" name="id" value="{{$idd}}">               
                <button class="btn btn-outline-success m-2 col-4">publicar comentario</button>
            </form>
              </div>
            </div>
        </div>

    @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>