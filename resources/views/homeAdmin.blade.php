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
                    <table style="text-align:center;" class="col-12 row m-2 d-flex justify-content-center">
                        <tr class="border bg-light">
                            <th class="border border-dark col-1">Nombre</th>
                            <th class="border border-dark col-1">Correo</th>
                            <th class="border border-dark col-1">Mensaje</th>
                            <th class="border border-dark col-1">Eliminar comentario</th>

                        <tr>
                    <!--Lista los usuarios junto a su nombre, apellido, ID, y correo-->
                    @foreach ($contactos as $contacto)
                         <form method="POST" action="{{route('updateUsers')}}">
                        @csrf
                            <tr class="bg-light">
                                <td class="border border-dark">{{$contacto->name}}</td>
                                <td class="border border-dark">{{$contacto->email}}</td>
                                <td class="border border-dark">{{$contacto->comentario}}</td>
                                <td class="border border-dark"><a href="{{route('deleteContacto',[$contacto->id])}}" class="text-danger col-10">Eliminar</a></td>

                            </tr>
                        </form>
                    @endforeach
                    </table>               
                </div>
            </div>




    {{--@include('includes.footer')--}}
    </div>
    @include('includes.js')
</body>

</html>