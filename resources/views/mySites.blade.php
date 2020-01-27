@include('includes.head')

<title>@lang('Perfil de') {{Auth::user()->name}}</title>
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/profile.css') }}">
</head>

<body>
    <!-- Guarda la id del usuario en variable de sesion para usar en controladores hasta encontrar otra mejor forma -->
    <?php $id=Auth::user()->id;session(['id' => $id]); ?>
    @include('includes.navs.navUser')
    <div class="container col-10">
        

        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="row">
            @if (isset($sites))
                @foreach($sites as $site)
                    @include('includes/site')
                @endforeach
            @endif
        </div>
        <div class="container col-4">
            @if (Auth::user()->role=='owner')
                <a href="{{route('addlocal')}}" class="btn btn-primary m-2 col-8">Añadir local</a>
            @endif
            @if (Auth::user()->role=='user' && Auth::user()->solicitud==1)
                <h3>Se esta procesando su solicitud, por favor, vuelva a intentarlo mas tarde.</h3>
            @endif
            @if (Auth::user()->role=='user')
            
              <input type="button" name="Solicitud" class="btn btn-primary m-2 col-8" data-toggle="modal" data-target="#SolicitarModal" value="Pedir solicitud">

              <div class="modal fade" id="SolicitarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pedir solicitud</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Al solicitar el añadir un establecimiento aceptas ser el/la dueñ@ legitim@ de dicho establecimiento.
                        El proceso puede tardar un tiempo ya que hay que verificar la identidad de los usuarios.
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                            <input type="hidden" name="id" value="{{Auth::user()->id}}" />
                            <a href="{{route('mySitesRequest',[Auth::user()->id])}}" class="btn btn-success">Solicitar</a>
                    </div>
                    </div>
                </div>
                </div>
                
            @endif
        
        </div>
        
    </div>
    @include('includes.footer')
    @include('includes.js')
</body>

</html>