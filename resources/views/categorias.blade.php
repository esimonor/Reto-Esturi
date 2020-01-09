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
<div class="col-12">
 <div class="card-deck">
  <div class="card align-items-center">
    <img class="card-img-top" src="{{ URL::asset('images/fiesta.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Fiestas</h5>
    </div>
    <div class="card-footer">
      <input type="checkbox" name="fiesta">
    </div>
  </div>
  <div class="card align-items-center">
    <img class="card-img-top" src="{{ URL::asset('images/monumento.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Monumentos</h5>
    </div>
    <div class="card-footer">
      <input type="checkbox" name="fiesta">
    </div>
  </div>
  <div class="card align-items-center">
    <img class="card-img-top" src="{{ URL::asset('images/centro.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Centro Comerciales</h5>
    </div>
    <div class="card-footer">
      <input type="checkbox" name="fiesta">
    </div>
  </div>
  <div class="card align-items-center">
    <img class="card-img-top" src="{{ URL::asset('images/gimnasio.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Gimnasios</h5>
    </div>
    <div class="card-footer">
      <input type="checkbox" name="fiesta">
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
      <input type="checkbox" name="fiesta">
    </div>
  </div>
  <div class="card align-items-center">
    <img class="card-img-top" src="{{ URL::asset('images/bares.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Bares</h5>
    </div>
    <div class="card-footer">
      <input type="checkbox" name="fiesta">
    </div>
  </div>
  <div class="card align-items-center">
    <img class="card-img-top" src="{{ URL::asset('images/restaurantes.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Restaurantes</h5>
    </div>
    <div class="card-footer">
      <input type="checkbox" name="fiesta">
    </div>
  </div>
  <div class="card align-items-center">
    <img class="card-img-top" src="{{ URL::asset('images/museos.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Museos</h5>
    </div>
    <div class="card-footer">
      <input type="checkbox" name="fiesta">
    </div>
  </div>
</div>
</div>
	<div class="row justify-content-center">
		<div>
			<button type="button" class="btn btn-primary">Enviar</button>
		</div>
	</div>
</div>

        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>