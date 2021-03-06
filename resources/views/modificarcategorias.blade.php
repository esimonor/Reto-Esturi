@include('includes.head')

<title>@lang('Categorias')</title>
</head>
<style type="text/css">
	.card-img-top{
		height: 100%;
		width: 100%;
	}
</style>
<body>
    <div class="container col-12">
        @include('includes.navs.navUser')
<form class="col-12" method="POST" action="/gustos">
	<input type="hidden" name="modificador" value="1">
<div class="col-12">
 <div class="card-deck">
  <div class="card align-items-center">
    <img class="card-img-top" src="{{ URL::asset('images/fiesta.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Fiestas</h5>
    </div>
    <div class="card-footer">
      <input type="hidden" name="idfiesta" value="1">
      @if($fiest==0)
      <input type="checkbox" name="fiesta" value="fiesta">
      @else
      <input type="checkbox" name="fiesta" value="fiesta" checked>
      @endif
    </div>
  </div>
  <div class="card align-items-center">
    <img class="card-img-top" src="{{ URL::asset('images/monumento.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Monumentos</h5>
    </div>
    <div class="card-footer">
      <input type="hidden" name="idmonumento" value="5">
      @if($monumentos==0)
      <input type="checkbox" name="monumento" value="monumento">
      @else
      <input type="checkbox" name="monumento" value="monumento" checked>
      @endif
    </div>
  </div>
  <div class="card align-items-center">
    <img class="card-img-top" src="{{ URL::asset('images/centro.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Centro Comerciales</h5>
    </div>
    <div class="card-footer">
      <input type="hidden" name="idcentrocomercial" value="2">
      @if($cc==0)
      <input type="checkbox" name="centrocomercial" value="centrocomercial">
      @else
      <input type="checkbox" name="centrocomercial" value="centrocomercial" checked>
      @endif
    </div>
  </div>
  <div class="card align-items-center">
    <img class="card-img-top" src="{{ URL::asset('images/gimnasio.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Gimnasios</h5>
    </div>
    <div class="card-footer">
      <input type="hidden" name="idgimnasio" value="3">
      @if($gym==0)
      <input type="checkbox" name="gimnasio" value="gimnasio">
      @else
      <input type="checkbox" name="gimnasio" value="gimnasio" checked>
      @endif
    </div>
  </div>
</div>
<br>
<div class="card-deck">
  <div class="card align-items-center">
    <img class="card-img-top" src="{{ URL::asset('images/cines.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cines</h5>
    </div>
    <div class="card-footer">
      <input type="hidden" name="idcine" value="4">
      @if($cine==0)
      <input type="checkbox" name="cine" value="cines">
      @else
      <input type="checkbox" name="cine" value="cines" checked>
      @endif
    </div>
  </div>
  <div class="card align-items-center">
    <img class="card-img-top" src="{{ URL::asset('images/bares.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Bares</h5>
    </div>
    <div class="card-footer">
      <input type="hidden" name="idbar" value="6">
      @if($bares==0)
      <input type="checkbox" name="bar" value="bares">
      @else
      <input type="checkbox" name="bar" value="bares" checked>
      @endif
    </div>
  </div>
  <div class="card align-items-center">
    <img class="card-img-top" src="{{ URL::asset('images/restaurantes.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Restaurantes</h5>
    </div>
    <div class="card-footer">
      <input type="hidden" name="idrestaurante" value="7">
      @if($restaurantes==0)
      <input type="checkbox" name="restaurante" value="restaurantes">
      @else
      <input type="checkbox" name="restaurante" value="restaurantes" checked>
      @endif
    </div>
  </div>
  <div class="card align-items-center">
    <img class="card-img-top" src="{{ URL::asset('images/museos.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Museos</h5>
    </div>
    <div class="card-footer">
      <input type="hidden" name="idmuseo" value="8">
      @if($museos==0)
      <input type="checkbox" name="museo" value="museo">
      @else
      <input type="checkbox" name="museo" value="museo" checked>
      @endif
    </div>
  </div>
</div>
</div>
	<div class="row justify-content-center">
   <div class="container">
    <div class=" d-flex">
      <input type="hidden" name="formulario" value="uno">
      {{csrf_field()}}
      <button class="btn btn-outline-success m-2 col-4 align-items-center">siguiente</button>
    <!--</form>-->
    </div>
   </div>
  
	</div>
</div>
</form>
     @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>