@include('includes.head')

<title>@lang('Perfil de') {{Auth::user()->name}}</title>
</head>

<body>
    <div class="container col-12">
        @include('includes.navs.navUser')

        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="row">
            <div class="col-12 row m-2 d-flex justify-content-center">
                <h4 class="d-flex justify-content-center col-9 m-1">Usuario administrador:{{Auth::user()->name}} {{Auth::user()->lastName}}</h4>
                <br>
                    <table class="col-12 row m-2 d-flex justify-content-center">
                        <tr class="border">
                            <th class="border border-dark col-1">ID</th>
                            <th class="border border-dark col-1">Nombre</th>
                            <th class="border border-dark col-1">Categoria</th>
                            <th class="border border-dark col-1">Owner ID</th>
                            <th class="border border-dark col-1">Eliminar usuarios</th>
                        <tr>
                    <!--Lista los usuarios junto a su nombre, apellido, ID, y correo-->
                    @foreach ($establishments as $establishment)
                    <tr>
                        <td class="border border-dark">{{$establishment->id}}</td>
                        <td class="border border-dark">{{$establishment->name}}</td>
                        <td class="border border-dark">{{$establishment->type}}</td>
                        <td class="border border-dark">{{$establishment->owner}}</td>
                        <td class="border border-dark"><a href="{{route('deleteEstablishments',[$establishment->id])}}" class="text-danger col-10">Eliminar</a></td>
                    </tr>
                    @endforeach
                    </table>               
                <a type="button" class="btn btn-primary col-6 m-1" href="{{ URL::asset('homeAdmin') }}">Volver</a>
                </div>
            </div>
        </div>

        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>