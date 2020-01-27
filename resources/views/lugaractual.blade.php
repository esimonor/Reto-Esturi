@include('includes.head')
<title>@lang('Establecimiento con comentarios')</title>
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/form.css') }}">
</head>
<body>
    <div class="container col-12">
        @include('includes.navs.navUser')
        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="row d-flex justify-content-center">
            <div class="col-6 row">
               @foreach($site as $ruta)
                <img src="../images/{{$ruta->rutaactual}}" class="m-2 border rounded col-10">
                @endforeach
            <br>
            @guest
            @else
                <form method="POST" action="/sitio">
                    @csrf
                    <input type="hidden" name="favorito" value="1">
                    <input type="hidden" name="form" value="fav">
                    <input type="hidden" name="idusuario" value="{{Auth::user()->id}}">              
                    <button class="btn btn-outline-success m-2 col-12">fav</button>
                </form>
            @endguest
            </div>
        </div>
        <div class="col-4 m-2 d-flex justify-content-center " style="text-align: center" >
            <div class="border">
                <h4>Comentarios</h4>
                <hr>
                <div class="container justify-content-center">
                <form class="col-10 m-4" method="POST" action="/sitio">
                @csrf
                <input type="text" name="comentario">
                <input type="hidden" name="form" value="com"> 
                <input type="hidden" name="id" value="{{$idd}}">               
                <button class="btn btn-outline-success m-1 col-9">Publicar comentario</button>
            </form>
              </div>
            </div>
        </div>

    @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>