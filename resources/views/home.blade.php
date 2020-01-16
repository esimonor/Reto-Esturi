@include('includes.head')
@include('includes.mapa')
<title>@lang('Mapa')</title>
</head>
</style>

<body>
    @include('includes.navs.nav')

    <div class="container col-12">
        <div id='cards' class="container row addScroll col-xl-4 col-lg-4 col-md-12 col-sm-12 float-left">
    
            @if (isset($sites))
                <?php
                    $i=1;
                    foreach ($sites as $site){
                        ?>
                    @include('includes/tarjetas')
                    <?php
                    $latitud=$site->latitud;
                    $longitud=$site->longitud;
                    $desc=$site->type;
                    echo '<input id="lat',$i,'" type="hidden" value="', $latitud ,'" />';
                    echo '<input id="long',$i,'" type="hidden" value="', $longitud ,'" />';
                    echo '<input id="name',$i,'" type="hidden" value="',$site->name ,'" />';
                    echo '<input id="desc',$i,'" type="hidden" value="', $desc ,'" />';
    
                    $i++;
                    }
                    echo '<input id="res_final" type="hidden" value="', $i-1 ,'" />';
                ?>
            @endif
        </div>
        
        <div id='mapa' class="container col-xl-8 col-lg-8 col-md-12 col-sm-12 float-left">
<!--    <div class="container">
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
-->
                <section>
            <!-- Mapa -->
            <div id="map"></div>
        </section>
        
    </div>
<<<<<<< HEAD
    
    </div>
=======
>>>>>>> masterandres
    <div class="container col-12 float-left">
    <br>
    <br>
        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>
