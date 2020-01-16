@include('includes.head')
@include('includes.mapa')
<title>@lang('Inicio')</title>
</head>
</style>

<body>
    @include('includes.navs.nav')
    <div class="container">
    <div class="container col-12 float-left">
        @if (isset($sites))
            @foreach($sites as $site)
                <div class="col-6 float-left">
                    <div id="{{$site->id}}">
                        <img src="images/{{$site->rutaactual}}" class="m-2 border rounded col-8">
                        <p>Nombre: {{ $site->name }}</p>
                        <p>Tipo de establecimiento: {{ $site->type}}</p>
                        <p>Localización: {{ $site->localization }}</p>
                        <p>Id del propietario: {{ $site->owner }}</p>
                    </div>
                    <a class="btn btn-info" value="{{$site->id}}" href="local/{{$site->id}}">ver mas</a>
                </div>
            @endforeach
        @endif 
    </div>
    </div>
    <div class="container col-12 float-left alturadelcontenedor">
                <section>
            <!-- Mapa -->
            <div id="map"></div>
        </section>
        
    </div>
    <div class="container col-12 float-left">
        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>
