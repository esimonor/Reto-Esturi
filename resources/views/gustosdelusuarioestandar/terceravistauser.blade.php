@include('includes.head')
@include('includes.mapa')
<title>@lang('Añadir local')</title>

</style>
</head>
<body>


    <div class="container col-12">
        @include('includes.navs.navUser')
    </div>

        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="container d-flex aling-items-column justify-content-center">
            <h2>ha terminado la configuracion de su cuenta</h2>
        </div>
        <div class="container">
            <div class="progress m-3">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                    perfil completado al 100%
                </div>
            </div>
        </div>
        <form class="col-12" method="POST" action="/gustos/{{Auth::user()->idvalor()}}">
    <div class=" d-flex">
     <form class="col-12" method="POST" action="/gustosdelusuarioestandar">
      <input type="hidden" name="_method" value="PUT">
      {{csrf_field()}}
      <button class="btn btn-outline-success m-2 col-4 align-items-center">siguiente</button>
    </form>
    </div>
    @include('includes.footer')
    @include('includes.js')
</body>

</html>

<!--

$primerlogin=User::find($id);
        $primerlogin->primerlogin=0;
        $primerlogin->save();

        return redirect('home');-->