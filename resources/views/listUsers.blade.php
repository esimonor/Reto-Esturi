@include('includes.headAdmin')
</head>

<body>
    <div class="container col-12">
        @include('includes.navs.vnav')

        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="row">
            <div class="col-12 row m-2 d-flex justify-content-center">
                    <table style="text-align:center;" class="col-12 row m-2 d-flex justify-content-center">
                        <tr class="border bg-light">
                            <th class="border border-dark col-1">ID</th>
                            <th class="border border-dark col-1">Nombre</th>
                            <th class="border border-dark col-1">Apellido</th>
                            <th class="border border-dark col-1">Correo</th>
                            <th class="border border-dark col-1">Eliminar usuarios</th>
                            <th class="border border-dark col-1">Modificar usuarios</th>
                        <tr>
                    <!--Lista los usuarios junto a su nombre, apellido, ID, y correo-->
                    @foreach ($users as $user)
                        <form method="POST" action="{{route('updateUsers')}}">
                        @csrf
                            <tr class="bg-light">
                                <td class="border border-dark">{{$user->id}}</td>
                               <input name="id" type="hidden" value="{{$user->id}}" />
                                <td class="border border-dark"><input name="name" type="text" value="{{$user->name}}"></td>
                                <td class="border border-dark"><input name="lastname" type="text" value="{{$user->lastName}}"></td>
                                <td class="border border-dark"><input name="email" type="text" value="{{$user->email}}"></td>
                                @if ($user->id==Auth::user()->id)
                                    <td class="border border-dark"></td>
                                @else
                                <td class="border border-dark"><a href="{{route('deleteusers',[$user->id])}}" class="text-danger col-10">Eliminar</a></td>
                                @endif
                                <td class="border border-dark"><button class="text-warning col-10">Modificar</button></td>
                            </tr>
                        </form>
                    @endforeach
                    </table>               
                <a type="button" class="btn btn-primary col-6 m-1" href="{{ URL::asset('homeAdmin') }}">Volver</a>
                </div>
            </div>
        </div>

        {{--@include('includes.footer')--}}
    </div>
    @include('includes.js')
</body>

</html>