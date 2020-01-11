@include('includes.head')
@include('includes.mapa')
<title>@lang('Inicio')</title>
</head>

<body>
    @include('includes.navs.nav')
    <div class="container">
    <div class="container col-6 float-left">
    @php 
    $i=1;
    @endphp
        @if (isset($sites))
            <!--@foreach($sites as $site)
                @include('includes/tarjetas')
                <input id="1" type="hidden" value="{{ $site->localization }}" />
            @endforeach-->
            <?php
                $i=1;
                foreach ($sites as $site){
                    ?>
                @include('includes/tarjetas')
                <?php
                echo '<input id="',$i,'" type="hidden" value="{{ $site->localization }}" />';
                $i++;
                }
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
