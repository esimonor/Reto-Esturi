@include('includes.head')
<title>@lang('Establecimiento con comentarios')</title>
<style type="text/css">
  .alturas{
    height: 400px;
    max-height:400px;
    overflow-y: scroll;
  }
</style>
</head>
<body>
    <div class="container-fuid">
        @include('includes.navs.navUser')
    </div>
    <div class="container-fluid bg-secondary m-0">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-6">
                        <div class="col-12 row">
                            @foreach($site as $ruta)
                            <img src="../images/{{$ruta->rutaactual}}" class=" border rounded col-10 bg-light">
                            @endforeach
                            <br>
                        </div>
                        <div class="col-12 row">
                            <form class="col-12" method="POST" action="/sitio">
                                @csrf
                                <input type="hidden" name="favorito" value="1">
                                <input type="hidden" name="form" value="fav">
                                <input type="hidden" name="id" value="{{$idd}}"> 
                                <input type="hidden" name="idusuario" value="{{Auth::user()->id}}">              
                                <button class="btn btn-success  col-10 text-align-center">añadir a mis favoritos</button>
                            </form>
                        </div>
                    </div>
                    <div class="container-fluid">
                    <div class="col-12 bg-light m-4">
                        <div class="border bg-light  alturas">
<h4 class="text-center">comentarios</h4>
<div class="dropdown-divider"></div>
<div class="container">
<table class="table">
<thead class="thead-light">
<tr>
<th scope="col">usuario</th>
<th scope="col">comentario</th>
<th scope="col">fecha</th>
</tr>
</thead>
<tbody>
@foreach($users as $user)
@forelse($user->establishment as $valor)
@if(empty($valor->pivot->comentarios))
@else
<tr>
<td>{{$user->name}}</td>
<td>{{$valor->pivot->comentarios}}</td>
<td>{{$valor->pivot->created_at}}</td>
</tr>
@endif
@endforeach
@empty
@endforelse
</tbody>
</table>
</div>



</div>
                   <div class="container justify-content-center">
                    <form class="col-10 m-4" method="POST" action="/sitio">
                    @csrf
                    <input type="text" name="comentario" class="col-12">
                    <input type="hidden" name="form" value="com"> 
                    <input type="hidden" name="id" value="{{$idd}}">               
                    <button class="btn btn-outline-success m-1 col-12 text-align-center">Publicar comentario</button>
                </form>
                  </div>
                </div>
</div>
</div>
</div>
</div>



</div>
    @include('includes.footer')

    @include('includes.js')

</body>

</html>
<!--


<div class="container col-6">
            <div class="row">
                <div class="col-12 row">
                    @foreach($site as $ruta)
                    <img src="../images/{{$ruta->rutaactual}}" class="m-2 border rounded col-10">
                    @endforeach
                <br>
                </div>
                <div class="col-12 row">
                <form method="POST" action="/sitio">
                    @csrf
                    <input type="hidden" name="favorito" value="1">
                    <input type="hidden" name="form" value="fav">
                    <input type="hidden" name="id" value="{{$idd}}"> 
                    <input type="hidden" name="idusuario" value="{{Auth::user()->id}}">              
                    <button class="btn btn-outline-success m-2 col-12">fav</button>
                </form>
                </div>
            </div>
        </div>
        <div class="col-4 m-2 d-flex justify-content-center " style="text-align: center" >
            <div class="border">
                <h4>Comentarios</h4>
                <hr>
                <div class="container justify-content-center">
                <form class="col-10 m-4" method="POST" action="/sitio">
                @csrf
                <input type="text" name="comentario">
                <input type="hidden" name="form" value="com"> 
                <input type="hidden" name="id" value="{{$idd}}">               
                <button class="btn btn-outline-success m-1 col-9">Publicar comentario</button>
            </form>
              </div>
            </div>
        </div>

-->
