@include('includes.head')
<title>@lang('Establecimiento con comentarios')</title>

</head>
<body>
    <div class="container col-12">
        @include('includes.navs.navUser')

        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="row d-flex justify-content-center">
            <div class="col-6 row">

                <img src="{{ URL::asset('images/museum.png') }}" class="m-2 border rounded col-6">

                @foreach($site as $ruta)
                <!--<img src="images/{{$ruta->rutaactual}}" class="m-2 border rounded col-10">-->
                <!--<img id="esesta" src="images/{{$ruta->rutaactual}}" class="m-2 border rounded col-10">-->
                @endforeach

                
            <form method="POST" action="/sitio">
                @csrf
                <input type="hidden" name="favorito" value="1">
                <input type="hidden" name="form" value="fav">
                <input type="hidden" name="idusuario" value="{{Auth::user()->id}}">

                
                <button class="btn btn-outline-success m-2 col-12">fav</button>
            </form>
            </div>
        </div>
        <div class="col-6 " >
            <div class="border">
                <h4>comentarios de los clientes</h4>
                <div class="dropdown-divider"></div>
                <div class="container">
                <form class="col-6" method="POST" action="/sitio">
                @csrf
                <input type="text" name="comentario">
                <input type="hidden" name="form" value="com"> 
                <input type="hidden" name="id" value="{{$idd}}">               
                <button class="btn btn-outline-success m-1 col-9">publicar comentario</button>
            </form>
              </div>
            </div>
        </div>

    @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>