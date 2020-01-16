@include('includes.head')

<title>@lang('Perfil de') {{Auth::user()->name}}</title>
</head>

<body>
    <!-- Guarda la id del usuario en variable de sesion para usar en controladores hasta encontrar otra mejor forma -->
    <?php $id=Auth::user()->id;session(['id' => $id]); ?>
    <div class="container col-12">
        @include('includes.navs.navUser')

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
            @if (Auth::user()->role=='user')
            
              <input type="button" name="Solicitud" class="btn btn-primary m-2 col-8" data-toggle="modal" data-target="#SolicitarModal" value="Pedir solicitud">

              <!-- Modal Inicio de sesion -->
                <div id="SolicitarModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content bg-dark text-white">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">@lang('Solicitud de Propetario')</h5>
                               
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('solicitud.update') }}">
                                    @csrf
                                    <div class="form-group row d-flex justify-content-center">
                                        <label for="email" class="col-md-6 col-form-label ">@lang('Con esta solicitud estas pidiendo permiso de ser un usuario Propetario. Eso consiste en que puedes añadir lugares en esta app.')</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="form-group row mb-0 d-flex align-items-center text-warning">
                                            <p>Estas seguro que quieres pedir esta solicitud?</p>
                                            <div class="input-group col">
                                                <button class="btn btn-outline-success" type="submit">@lang('Pedir')</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        
        </div>
        @include('includes.footer')
    </div>
    @include('includes.js')
</body>

</html>