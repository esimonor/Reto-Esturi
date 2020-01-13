@include('includes.head')
@include('includes.mapa')
<title>@lang('Añadir local')</title>

</style>
</head>
<body>

</div> 
    <div class="container col-12">
        @include('includes.navs.navUser')

        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="container">
            <h2>si no quieres subir una foto ahora puedes hacerlo mas tarde</h2>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-6 row">
                <img src="/images/{{ Auth::user()->ruta }}" class="m-2 border rounded col-10">
            </div>
        </div>
        <div class="col-3 " >
            <div class="border">
            </div>
        </div>
        <div class="container">
            <div class="progress m-3">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    perfil completado al 70%
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex align-items-center">
                <form class="col-12" method="POST" action="{{route('update')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                    <input  type="file" name="file"><br>
                    <input type="hidden" name="name" pattern="[^()/><\][\\\x22,;|]+" value="{{Auth::user()->name}}" />
                    <input type="hidden" name="lastname" pattern="[^()/><\][\\\x22,;|]+" value="{{Auth::user()->lastName}}" />
                    <input type="hidden" name="email" pattern="[^()/><\][\\\x22,;|]+" value="{{Auth::user()->email}}" />
                    <button type="submit" class="btn btn-outline-success m-2 col-4">subir imagen</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <button class="btn btn-outline-success m-2 col-4"><a href="ver2">siguiente</a></button>
    </div>
    @include('includes.footer')
    
    @include('includes.js')
</body>

</html>