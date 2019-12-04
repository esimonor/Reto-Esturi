@include('includes.head')
<title>@lang('Verificacion')</title>
</head>

<body>
    @include('includes.navs.navAuth')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">@lang('Verifica tu correo electronico')</div>

                    <div class="card-body">
                        @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            @lang('Se te ha enviado al correo electronico otro link de verificacion.')
                        </div>
                        @endif

                        @lang('Antes de continuar, porfavor comprueba tu correo electronico para el link de veridicacion.')
                        @lang('Si no has recivido ningun correo electronico'),
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">@lang('pulsa aqui para mandar otro')</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
	@include('includes.js')
</body>