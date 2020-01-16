@include('includes.head')
@include('includes.mapa')
<title>@lang('Mapa')</title>
</head>

<body>
    @include('includes.navs.navUser')
    <div class="container col-12">
        <div class="container  col-xl-6 col-lg-6 col-md-12 col-sm-12 float-left">
    
            @if (isset($sites))
                <?php
                    $i=1;
                    foreach ($sites as $site){
                        ?>
                    @include('includes/tarjetas')
                    <?php
                    $coord=$site->localization;
                    $desc=$site->type;
                    echo '<input id="',$i,'" type="hidden" value="', $coord ,'" />';
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
