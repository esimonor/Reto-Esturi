@include('includes.head')
@include('includes.mapa')
<title>@lang('Mapa')</title>
</head>

<body>
    @include('includes.navs.navUser')
    <div class="container col-12">
        <div id='cards' class="d-flex container row addScroll col-xl-4 col-lg-4 col-md-12 col-sm-12 float-left">
    
            @if (isset($sites))
                <?php
                    $i=1;
                    foreach ($sites as $site){
                        ?>
                        <div class="row col-5 m-1">
                    @include('includes/tarjetas')
                        </div>
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

    <div class="container col-12 float-left alturadelcontenedor">

            <!-- Mapa -->
            <div id="map"></div>
        
    </div>
    </div>
    
    
    @include('includes.js')
    @include('includes.footer')    
    </div>
</body>

</html>
