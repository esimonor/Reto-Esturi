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
                            <th class="border border-dark col-1">Apellido</th>
                            <th class="border border-dark col-1">Correo</th>
                            <th class="border border-dark col-1">Eliminar usuarios</th>
                            <th class="border border-dark col-1">Editar</th>
                        <tr>
                    <!--Lista los usuarios junto a su nombre, apellido, ID, y correo-->
                    @foreach ($users as $user)
                    <tr>
                        <td class="border border-dark">{{$user->id}}</td>
                        <td class="border border-dark"><input type="text" value="{{$user->name}}"/></td>
                        <td class="border border-dark"><input type="text" value="{{$user->lastName}}"/></td>
                        <td class="border border-dark"><input type="text" value="{{$user->email}}"/></td>
                        @if ($user->id==Auth::user()->id)
                        <td class="border border-dark" style="background-color: darkgrey"></td>
                        @else
                        <td class="border border-dark"><a href="{{route('deleteusers',[$user->id])}}" class="text-danger col-10">Eliminar</a></td>
                        @endif
                        <td class="border border-dark"><a href="#" class="text-warning">Editar</a></td>
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