@include('includes.headAdmin')

</head>

<body>
    <div class="container col-12">
        <!--@include('includes.navs.navUser')-->
        @include('includes.navs.vnav')

        <div class="row">
            <div class="col-12 row m-2 d-flex justify-content-center">
                <a href="{{ URL::asset('listUsers') }}" class="btn btn-primary col-3 m-1">Listar usuarios</a>
                <a href="{{ URL::asset('listEstablishments') }}" class="btn btn-primary col-3 m-1">Listar establecimientos</a>
                </div>
            </div>
        </div>

    {{--@include('includes.footer')--}}
    </div>
    @include('includes.js')
</body>

</html>