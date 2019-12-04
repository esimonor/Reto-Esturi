@include('includes.head')
@include('includes.mapa')
<title>@lang('Inicio')</title>
</head>

<body>
    <div class="container col-12">
        @include('includes.navs.nav')
        <section>
            <!-- Mapa -->
            <div id="map"></div>
        </section>
        
        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>
