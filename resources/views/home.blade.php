@include('includes.head')
@include('includes.mapa')
<title>@lang('Mapa')</title>
</head>

<body>
    @include('includes.navs.nav')
    <div class="container col-12">
        <div class="container  col-xl-6 col-lg-6 col-md-12 col-sm-12 float-left">
    
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
        <div class="container col-xl-6 col-lg-6 col-md-12 col-sm-12 float-left">
                <section>
            <!-- Mapa -->
            <div id="map"></div>
        </section>
        
    </div>
    
    </div>
    <div class="container col-12 float-left">
    <br>
    <br>
        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>
