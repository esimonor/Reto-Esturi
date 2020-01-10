@include('includes.head')
@include('includes.mapa')
<title>@lang('Inicio')</title>
</head>

<body>
    @include('includes.navs.nav')
    <div class="container">
    <div class="container col-6 float-left">
        @if (isset($sites))
            @foreach($sites as $site)
                @include('includes/tarjetas')
            @endforeach
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
