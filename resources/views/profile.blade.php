@include('includes.head')
<title>@lang('Perfil de') {{Auth::user()->name()}}</title>
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/profile.css') }}">
</head>

<body>
    @include('includes.navs.navUser')
    <div class="container col-12">
        

        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="row">
            <div class="col-5 row">
                <img src="/images/{{Auth::user()->ruta }}" class="m-3 border rounded col-7">
                <p class="col-5">Nombre:  {{Auth::user()->name}}</p>
                <p class="col-5">Apellido: {{Auth::user()->lastName}}</p>
                <p class="col-10">Correo:  {{Auth::user()->email}}</p>
                <p class="col-10">Tu rol:  {{Auth::user()->role}}</p>
                <a href="{{route('mySites')}}" class="btn btn-success m-2 col-4">Mis locales</a>                
                <a href="owndrop/{{Auth::user()->id}}" class="btn btn-danger m-2 col-4">borrar cuenta</a>

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
                              <button type="button" class="btn btn-primary" data-dismiss="modal">No borrar</button>-->
                              <!-- los if son porque segun el usuario que sea envia los datos de borrar a un controlador u otro-->
                             @if(Auth::user()->role=='owner')
                              <a class="btn btn-danger" href="{{route('deleteusers',[Auth::user()->id])}}" class="text-danger col-10">Borrar cuenta</a>
                              @endif
                              @if(Auth::user()->role=='user')
                              <a class="btn btn-danger" href="owndrop/{{Auth::user()->id}}" class="text-danger col-10">Borrar cuenta</a>
                              @endif
                              @if(Auth::user()->role=='admin')
                              <a class="btn btn-danger" href="{{route('deleteusers',[Auth::user()->id])}}" class="text-danger col-10">Borrar cuenta</a>
                              @endif
                            </div>
                          </div>
                        </div>
                      </div>

                       

                <a href="{{ URL::asset('modprofile') }}" class="btn btn-warning m-2 col-4">Modificar cuenta</a>
            </div>
            <!-- Listado de lugares favoritos -->
            <div class="m-3 col-3">
                <div class="border bg-transparent">
                    <h4>Lugares favoritos</h4>
                    <div class="dropdown-divider"></div>
                    <div class="container">
                  @forelse($user->establishment as $valor)
                    @if(empty($valor->pivot->lfavorito))
                    @else
                      <div class="d-flex justify-content-between">
                        <p>{{$valor->name}}</p>
                        <a type="button" href="local/{{$valor->id}}">ver</a>                       
                      </div>
                      <hr>
                    @endif
                  @empty
                    <p>No se han encontrado lugares favoritos</p>
                  @endforelse
                  </div>
                </div>
            </div>
            <!-- Comentarios -->
            <div class="m-3 col-3">
                <div class="border bg-transparent">
                  <h4>Comentarios</h4>
                    <div class="dropdown-divider"></div>
                    <div class="container">
                  @forelse($user->establishment as $valor)
                    @if(empty($valor->pivot->comentarios))
                    @else
                    <div class="d-flex justify-content-between">
                    <p>{{$valor->name}}</p>
                    <p>{{$valor->pivot->comentarios}}</p>
                    </div>
                    <hr>
                    @endif
                  @empty
                    <p>No se han encontrado comentarios</p>
                  @endforelse
                </div>
              </div>
            </div>
        </div>

        
    </div>
    @include('includes.footer')
</body>

</html>