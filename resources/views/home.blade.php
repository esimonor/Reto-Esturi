@include('includes.head')
@include('includes.mapa')
<title>Esturi</title>
</head>

<body>
    <div class="container col-12">
        @include('includes.nav')
        <div>
        <div id="basemaps-wrapper" class="leaflet-bar">
            <select id="basemaps" class="form-control">
                <option value="Physical">Physical</option>
                <option value="Imagery">Imagery</option>
                <option value="ImageryClarity">Imagery (Clarity)</option>
                <option value="ImageryFirefly">Imagery (Firefly)</option>
                <option value="Streets">Streets</option>
            </select>
        </div>
    </div>
        <section>
            <!-- Mapa -->
            <div id="map"></div>
        </section>
        
        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>
