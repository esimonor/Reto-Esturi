@include('includes.head')
<title>@lang('Perfil de') {{Auth::user()->name()}}</title>
 <!-- Perfil -->
<link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}">
<style type="text/css">
  .altura{
    height: 300px;
    max-height:300px;
    overflow-y: scroll;
  }
</style>
</head>

<body>
    <div class="container-fuid">
        @include('includes.navs.navUser')
    </div>
    <div class="container-fluid bg-success">
        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="container-fluid">
          <div class="row">
              <div class="col-12 row  d-flex justify-content-center">
                  <img src="/images/{{Auth::user()->ruta }}" class=" m-4 border rounded-circle col-4 bg-light">
              </div>
              <div class="container text-center  d-flex justify-items-center flex-column">
                      <h1 class="masthead-heading text-uppercase mb-0 text-light">{{Auth::user()->name}} {{Auth::user()->lastName}}</h1>
                      <h3 class="masthead-heading text-uppercase mb-0">{{Auth::user()->email}}</h3>
                      <h3 class="masthead-heading text-uppercase mb-0">{{Auth::user()->role}}</h3>
                     <!--<button data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-danger m-2 col-4">Eliminar cuenta</button>-->
                      <!--Ventana de confirmacion eliminar cuenta-->
              </div>
          </div>
        </div>
        <div class="container  d-flex justify-content-center">
                      <a href="owndrop/{{Auth::user()->id}}" class="btn bg-danger text-light m-2 col-5">borrar cuenta</a>
                      <a href="{{ URL::asset('modprofile') }}" class="btn bg-warning text-light m-2 col-5">Modificar cuenta</a>
        </div>

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
            </div>
            <div class="container-fluid bg-info m-0">
              <div class="container d-flex justify-content-center">
                <div class="col-6 m-4 altura">
<div class="border bg-light">
<h4 class="text-center">Lugares favoritos</h4>
<div class="dropdown-divider"></div>
<div class="container">
<table class="table">
<thead class="thead-light">
<tr>
<th scope="col">establesimiento</th>
<th scope="col">ver</th>
</tr>
</thead>
<tbody>
@forelse($user->establishment as $valor)
@if(empty($valor->pivot->lfavorito))
@else
<tr>
<td>{{$valor->name}}</td>
 
<td><a href="local/{{$valor->id}}" class=" fas fa-eye text-dark" ></a></td>      
</tr>
@endif
@empty
<p>No se han encontrado lugares favoritos</p>
@endforelse
</tbody>
</table>
</div>
</div>
</div>
                  <!-- Listado de lugares favoritos -->
                  <!--<div class="col-5 m-4 altura">
                      <div class="border bg-light">
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
                  </div>-->
                  <!-- Comentarios -->
                  <div class="col-6 m-4 altura">
<div class="border bg-light">
<h4 class="text-center">comentarios</h4>
<div class="dropdown-divider"></div>
<div class="container">
<table class="table">
<thead class="thead-light">
<tr>
<th scope="col">establecimiento</th>
<th scope="col">comentario</th>
<th></th>
</tr>
</thead>
<tbody>
@forelse($user->establishment as $valor)
@if(empty($valor->pivot->comentarios))
@else
<tr>
<td>{{$valor->name}}</td>
<td>{{$valor->pivot->comentarios}}</td>
<td><a href="local/{{$valor->id}}" class=" fas fa-eye text-dark mr-2" ></a><a href="borrarc/{{$valor->pivot->id}}" class="fas fa-trash-alt text-dark"></a></td> 
</tr>
@endif
@empty
<p>No se han encontrado comentarios</p>
@endforelse
</tbody>
</table>
</div>
</div>
</div>
                  <!--<div class="col-5 m-4 altura">
                      <div class="border bg-light">
                        <h4>comentarios</h4>
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
                  </div>-->
              </div>
          </div>
    </div>

        @include('includes.footer')


</body>

</html>