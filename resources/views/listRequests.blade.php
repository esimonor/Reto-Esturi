@include('includes.headAdmin')
</head>

<body>
    <div class="container col-12">
        @include('includes.navs.vnav')
        <div class="row">
            <div class="col-12 row m-2 d-flex justify-content-center">
                    <table style="text-align:center;" class="m-2 d-flex justify-content-center">
                        <tr class="border bg-light">
                            <th class="border border-dark col-12">ID</th>
                            <th class="border border-dark col-12">Usuario</th>
                            <th class="border border-dark col-12">Correo</th>
                            <th class="border border-dark col-12">Aceptar peticion</th>
                            <th class="border border-dark col-12">Denegar peticion</th>
                        <tr>
                    @foreach ($users as $user)
                            @if($user->role == "user")
                            <form action="{{route('acceptRequests')}}" method="POST">
                                @csrf
                            <tr class="bg-light">
                                <td class="border border-dark col-12">{{$user->id}}</td>
                                <input type="hidden" name="id" value="{{$user->id}}" />
                                <input type="hidden" name="role" value="{{$user->role}}" />
                                <td class="border border-dark col-12">{{$user->name}}</td>
                                <td class="border border-dark col-12">{{$user->email}}</td>
                                <td class="border border-dark col-12"><button class="btn btn-outline-success col-12">Aceptar</button></td>
                                <!--<td class="border border-dark col-12"><button class="btn btn-outline-danger col-12">Rechazar</button></td>-->
                            </tr>
                        </form>
                            @else 
                            @endif
                    @endforeach
                    </table>               
                <a type="button" class="btn btn-primary col-6 m-1" href="{{ URL::asset('homeAdmin') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>
    @include('includes.js')
</body>

</html>