@include('includes.head')
<title>@lang('Modificar perfil')</title>
</head>

<body> 
    <div class="container col-12">
        @include('includes.navs.navUser')

        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="row d-flex justify-content-center">
            <div class="col-6 row">
                <img src="/images/{{Auth::user()->ruta }}" class="m-2 border rounded col-10">
                <form class="col-12" method="POST" action="{{route('update')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="formulario" value="modprofile">
                    <input type="hidden" name="rutaactual" value="{{Auth::user()->ruta}}">
                    <label>Imagen</label> <input  type="file" name="file"><br>
                    <label>Nombre:</label><input type="text" name="name" pattern="[^()/><\][\\\x22,;|]+" value="{{Auth::user()->name}}" />
                    <label>Apellido:</label><input type="text" name="lastname" pattern="[^()/><\][\\\x22,;|]+" value="{{Auth::user()->lastName}}" />
                    <br>
                    <label>Correo:</label><input type="text" name="email" pattern="[^()/><\][\\\x22,;|]+" value="{{Auth::user()->email}}" />
                    <br>
                    
                    @if (Auth::user()->role=='owner')
                    <a href="{{URL::asset('homeOwner') }}" class="btn btn-outline-secondary m-2 col-4">Volver</a>
                    
                    @else
                    <a href="{{URL::asset('profile') }}" class="btn btn-outline-secondary m-2 col-4">Volver</a>
                    @endif

                    <button type="submit" class="btn btn-outline-success m-2 col-4">Guardar cambios</button>
                </form>
            </div>
        </div>

        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>