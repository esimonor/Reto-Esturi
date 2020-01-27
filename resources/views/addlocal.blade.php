@include('includes.head')
@include('includes.mapa')
<title>@lang('Añadir local')</title>
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/form.css') }}">
</head>
<body>
        @include('includes.navs.navUser')
    <div class="container col-10">
        <img src="{{ URL::asset('images/museum.png') }}" class="establishment float-left m-2 border rounded col-4">
        <div class="contenedor row d-flex justify-content-center">                    
            <form class="col-12 " method="POST" action="{{route('addLocal')}}" enctype="multipart/form-data">
                @csrf
                <input type="text" value="{{Auth::user()->name}}" disabled="true" hidden>
                    <label>Imagen</label> <input type="file" name="file" required><br>
                    <label>Nombre:</label><input type="text" name="name" />*<br>
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
                        <option value="gimnasios">Gimnasio</option>
                        <option value="monumentos">Monumento</option>
                    </select>*
                <input type="hidden" name="ownerId" value="{{Auth::user()->id}}" />
                    <br>
                    <input style="width:25%;" type="hidden" id="lat" name="latitud"/>
                    <input style="width:25%;" type="hidden" id="lng" name="longitud"/>
                    <div id="map"></div> 
                    <br>
                    <a href="{{URL::asset('homeOwner') }}" class="btn btn-secondary m-2 col-4">Volver</a>
                    <button class="btn btn-success m-2 col-4">Guardar cambios</button>
                </form>
            </div>
        </div>

    @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>