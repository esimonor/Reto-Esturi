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
                <form>
                    <table class="col-12 row m-2 d-flex justify-content-center">
                        <tr class="border">
                            <th class="border border-dark">ID</th>
                            <th class="border border-dark">Nombre</th>
                            <th class="border border-dark">Apellido</th>
                            <th class="border border-dark">Correo</th>
                            <th class="border border-dark">Eliminar seleccionados</th>
                        <tr>
                    <!--Lista los usuarios junto a su nombre, apellido, ID, y correo-->
                    @foreach ($users as $user)
                    <tr>
                        <td class="border border-dark">{{$user->id}}</td>
                        <td class="border border-dark">{{$user->name}}</td>
                        <td class="border border-dark">{{$user->lastName}}</td>
                        <td class="border border-dark">{{$user->email}}</td>
                        <td class="border border-dark"><input type="checkbox" id="eliminar"/></td>
                    </tr>
                    @endforeach
                    </table>
                    <input type="button" class="btn btn-danger col-12 m-1" value="Eliminar seleccionados"/>
                </form>               
                <a type="button" class="btn btn-primary col-6 m-1" href="{{ URL::asset('homeAdmin') }}">Volver</a>
                </div>
            </div>
        </div>

        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>