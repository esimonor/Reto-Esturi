@include('includes.head')
<title>@lang('Modificar perfil')</title>
</head>

<body>
    <?php $_SESSION['id_user']=Auth::user()->id;?>
    <div class="container col-12">
        @include('includes.navs.navUser')

        <!-- Foto de perfil, nombre y correo del usuario -->
        <div class="row d-flex justify-content-center">
            <div class="col-6 row">
                <img src="{{ URL::asset('images/profile.png') }}" class="m-2 border rounded col-10">
                <form class="col-12" method="POST" action="{{route('update')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                    <label>Imagen</label> <input type="file" name="pic" accept="image/*"><br>
                    <label>Nombre:</label><input type="text" name="name" pattern="[^()/><\][\\\x22,;|]+" value="{{Auth::user()->name}}" />
                    <label>Apellido:</label><input type="text" name="lastname" pattern="[^()/><\][\\\x22,;|]+" value="{{Auth::user()->lastName}}" />
                    <br>
                    <label>Correo:</label><input type="text" name="email" pattern="[^()/><\][\\\x22,;|]+" value="{{Auth::user()->email}}" />
                    <br>
                    <a href="{{URL::asset('profile') }}" class="btn btn-outline-secondary m-2 col-4">Volver</a>
                    <button class="btn btn-outline-success m-2 col-4">Guardar cambios</button>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <footer class="page-footer font-small bg-dark col-12">
            <div class="row justify-content-between">
                <div class="col-4 align-self-center text-white pl-4">
                    <b><u>Email de Contacto: </u></b><br>esturioficial@gmail.com
                </div>
                <!-- Copyright -->
                <div class="col-4 align-self-center text-center text-white">&copy 2019 Copyright:
                    <a href="{{ URL::asset('https://mdbootstrap.com/education/bootstrap/') }}"> Esturi.com</a>
                </div>
                <!-- Add font awesome icons -->
                <div class="col-4  align-self-center d-flex flex-row-reverse">
                    <a href="#" class="fa fa-youtube mr-3"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-facebook "></a>
                </div>
            </div>
        </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- Popper.js, then Bootstrap JS -->
    <script src="{{ URL::asset('js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>