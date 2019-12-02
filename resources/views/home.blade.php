@include('includes.head')
@include('includes.mapa')
<title>Esturi</title>
</head>

<body>
    <div class="container col-12">
        @include('includes.nav')

        <section>
            <!-- Mapa -->
            <div id="map"></div>
        </section>
        
        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>
