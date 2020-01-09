@include('includes.head')

<title>@lang('Perfil de') {{Auth::user()->name}}</title>
</head>

<body>
    <div class="container col-12">
        @include('includes.navs.navUser')

        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="row">
            <div class="col-6 row">
                <img src="{{ URL::asset('images/profile.png') }}" class="m-2 border rounded col-10">
                <p class="h5 col-5">Nombre:  {{Auth::user()->name}}</p>
                <p class="h5 col-5">Apellido: {{Auth::user()->lastName}}</p>
                <p class="h5 col-10">Correo:  {{Auth::user()->email}}</p>
                <p class="h5 col-10">Tu rol:  {{Auth::user()->role}}</p>
                @if (Auth::user()->role=="owner")
                <a href="#" class="btn btn-outline-success m-2 col-4">Ver local</a>
                <a href="{{route('addlocal')}}" class="btn btn-outline-warning m-2 col-4">Añadir local</a>
                @endif
                
                <button data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-danger m-2 col-4">Eliminar cuenta</button>
                <!--Ventana de confirmacion eliminar cuenta-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">¿Seguro que quieres borrar tu cuenta?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Si eliminas tu cuenta perderas todos tus datos, y no podras volver a utilizarla. 
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-dismiss="modal">No borrar</button>
                              <a class="btn btn-danger" href="{{route('deleteusers',[Auth::user()->id])}}" class="text-danger col-10">Borrar cuenta</a>
                            </div>
                          </div>
                        </div>
                      </div>

                <a href="{{ URL::asset('modprofile') }}" class="btn btn-outline-warning m-2 col-4">Modificar cuenta</a>
            </div>
            <!-- Listado de lugares favoritos -->
            <div class="col-3">
                <div class="border bg-light">
                    <h4>Lugares favoritos</h4>
                    <div class="dropdown-divider"></div>
                    <p>No se han encontrado lugares favoritos</p>
                </div>
            </div>
            <!-- Comentarios -->
            <div class="col-3">
                <div class="border bg-light">
                    <h4>Comentarios</h4>
                    <div class="dropdown-divider"></div>
                    <p>No se han encontrado comentarios</p>
                </div>
            </div>
        </div>

        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>