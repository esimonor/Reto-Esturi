@include('includes.head')
@include('includes.mapa')
<title>@lang('Añadir local')</title>
</head>
<body>
    <div class="container col-12">
        @include('includes.navs.navUser')

        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="row d-flex justify-content-center">
            <div class="col-6 row">
                <img src="{{ URL::asset('images/museum.png') }}" class="m-2 border rounded col-10">
                
            <form class="col-12" method="POST" action="{{route('addLocal')}}">
                @csrf
                <input type="text" value="{{Auth::user()->name}}" disabled="true" hidden>
                    <label>Imagen</label> <input type="file" name="pic" accept="image/*"><br>
                    <label>Nombre:</label><input type="text" name="name" />*
                    <br>
                    <label>Descripcion:</label><input type="text" name="desc" />
                    <br>
                    <label>Apertura:</label><input type="time" name="apertura" />
                    <label>Cierre:</label><input type="time" name="cierre" />
                    <br>
                    <label>Tipo:</label>
                    <select name="type">
                        <option value="bares">Bar</option>
                        <option value="restaurantes">Restaurante</option>
                        <option value="museos">Museo</option>
                        <option value="cines">Cine</option>
                        <option value="centros">Centro comercial</option>
                        <option value="fiestas">Discoteca</option>
                        <option value="gimnasio">Gimnasio</option>
                        <option value="monumentos">Monumento</option>
                    </select>*
                <input type="hidden" name="ownerId" value="{{Auth::user()->id}}" />
                    <br>
                    <label>Localizacion:</label><input style="width:45%;" type="text" id="coord" name="coordenadas" readonly/>
                        <!-- Mapa -->
                        <div id="map" style="weight:300px;height:300px"></div>
                    <br>
                    <a href="{{URL::asset('homeOwner') }}" class="btn btn-outline-secondary m-2 col-4">Volver</a>
                    <button class="btn btn-outline-success m-2 col-4">Guardar cambios</button>
                </form>
            </div>
        </div>

    @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>