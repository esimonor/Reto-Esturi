@include('includes.head')
@include('includes.mapa')
<title>@lang('Inicio')</title>
</head>

<body>
    @include('includes.navs.nav')
    <div class="container col-12">
    <div class="container col-6 float-left">
    @php 
    $i=1;
    @endphp
        @if (isset($sites))
            <?php
                $i=1;
                foreach ($sites as $site){
                    ?>
                @include('includes/tarjetas')
                <?php
                $coord=$site->localization;
                echo '<input id="',$i,'" type="hidden" value="', $coord ,'" />';
                $i++;
                }
                echo '<input id="res_final" type="hidden" value="', $i-1 ,'" />';
            ?>
        @endif
    </div>
    <div class="container col-6 float-left">
                <section>
            <!-- Mapa -->
            <div id="map"></div>
        </section>
        
    </div>
    </div>
    <div class="container col-12 float-left">
        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>
