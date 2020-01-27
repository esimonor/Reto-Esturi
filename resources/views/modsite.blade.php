@include('includes.head')
@include('includes.mapa')
<title>@lang('Modificar local')</title>
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/form.css') }}">
</head>
<body>
        @include('includes.navs.navUser')

        <div class="container col-12">
            <img src="../images/{{$valor->rutaactual}}" class="establishment float-left m-2 border rounded col-4">
            <div class="contenedor row d-flex justify-content-center">
                
            <form class="col-12" method="POST" action="{{route('updatelocal')}}" enctype="multipart/form-data">
                @csrf
                <input type="text" value="{{Auth::user()->name}}" disabled="true" hidden>
                <input type="hidden" name="formulario" value="modificarsitio">
                    <input type="hidden" name="idp" value="{{$valor->id}}">
                <input type="hidden" name="rutaactual" value="{{$valor->rutaactual}}">
                    <label>Imagen</label> <input type="file" name="file"><br>
                    <label>Nombre:</label><input type="text" name="name" value="{{$valor->name}}" />*
                    <br>
                    <label>Descripcion:</label><input type="text" name="desc" value="{{$valor->description}}" />
                    <br>
                    <label>Apertura:</label><input type="time" name="apertura" value="{{$valor->apertura}}"/>
                    <label>Cierre:</label><input type="time" name="cierre" value="{{$valor->cierre}}"/>
                    <br>
                    <label>Tipo:</label>
                    <select name="type">
                        <option value="{{$valor->type}}">{{$valor->type}}</option>
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
                   <input style="width:45%;" type="hidden" id="lat" name="latitud" value="{{$valor->longitud}}"/><br>
                    <input style="width:45%;" type="hidden" id="lng" name="longitud" value="{{$valor->latitud}}" />
                        <!-- Mapa -->
                        <div id="map"></div>
                    <br>
                    
                    <a href="{{URL::asset('homeOwner') }}" class="btn btn-secondary m-2 col-4">Volver</a>
                    <button class="btn btn-success m-2 col-4">Guardar cambios</button><br>
                    <a class="btn btn-danger" value="{{$valor->id}}" href="{{route('deletelocal',[$valor->id])}}">Eliminar establecimiento</a>
                </form>
            </div>
        </div>

    
    </div>
    @include('includes.footer')
    @include('includes.js')
</body>

</html>