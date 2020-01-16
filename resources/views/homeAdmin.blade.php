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


        <div class="row">
            <div class="col-12 row m-2 d-flex justify-content-center">
                    <table style="text-align:center;" class="m-2 d-flex justify-content-center">
                        <tr class="border bg-light">
                            <th class="border border-dark col-12">Nombre</th>
                            <th class="border border-dark col-12">Correo</th>
                            <th class="border border-dark col-12">Mensaje</th>
                            <th class="border border-dark col-12">Eliminar comentario</th>

                        <tr>
                    <!--Lista los usuarios junto a su nombre, apellido, ID, y correo-->
                    @foreach ($contactos as $contacto)
                            <tr class="bg-light">
                                <td class="border border-dark col-12">{{$contacto->name}}</td>
                                <td class="border border-dark col-12">{{$contacto->email}}</td>
                                <td class="border border-dark col-12">{{$contacto->comentario}}</td>
                                <td class="border border-dark col-12"><a href="{{route('deleteContacto',[$contacto->id])}}" class="text-danger col-10">Eliminar</a></td>
                            </tr>
                    @endforeach
                    </table>
                </div>
            </div>

    </div>
    @include('includes.js')
</body>

</html>