@include('includes.head')
<title>@lang('Establecimiento con comentarios')</title>
<style type="text/css">
  .alturas{
    height: 400px;
    max-height:400px;
    overflow-y: scroll;
  }
  .imagen{
    background-image: url("../images/{{$lugar->rutaactual}}");
    background-size: 100% 100%;
    width: 100%;
    height: 100%;
  }

</style>
</head>
<body class="imagen">
    <div class="container-fuid">
        @include('includes.navs.navUser')

    </div>
    <div class="container-fluid ">
        <div class="container bg-info normal">
            <div class="normal">
                <div class="row">
                    <div class="col-6">
                        <div class="col-12 row">
                            
                            <img src="../images/{{$lugar->rutaactual}}" class=" mt-3 border rounded col-10 bg-light">
                            
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
                    <div class="col-6">
                        <div class="col-12 row">
                            <h1 class="text-light text-align-center col-12">nombre: {{$lugar->name}}</h1>
                            <h2 class="text-light text-align-center col-12">tipo: {{$lugar->type}}</h2>
                            <h2 class="text-light text-align-center col-12">apertura: {{$lugar->apertura}}</h2>
                            <h2 class="text-light text-align-center col-12">cierre: {{$lugar->cierre}}</h2>
                            <h2 class="text-light text-align-center col-12">descripcion: {{$lugar->description}}</h2>
                            <h2 class="text-light text-align-center col-12">tipo: {{$lugar->type}}</h2>


                        </div>
                    </div>   
                    <div class="mt-4 container-fluid">
                    <div class="col-12 bg-light ">
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
