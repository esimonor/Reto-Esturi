@include('includes.head')

<title>@lang('Contacto')</title>
</head>

<body>
    <div class="container">
        @include('includes.nav')
        
        <section>
            <!-- Formulario Contacto-->
            <div id="formulario">
                <h1>Formulario de contacto</h1>
                <form>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nombre*</label>
                        <div class="col-sm-10">
                            <input type="text" pattern="[^()/><\][\\\x22,;|]+" class="form-control" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email*</label>
                        <div class="col-sm-10">
                            <input type="email" pattern="[^()/><\][\\\x22,;|]+" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Mensaje*</label>
                        <div class="col-sm-10">
                            <textarea type="textarea" style="resize:none;" class="form-control" placeholder="Mensaje" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">Terminos & condificiones</div>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    He leido y acepto los terminos y condiciones*
                                </label>
                                <br>
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    Deseo recibir informacion sobre futuras posibles ofertas*
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-outline-success">Enviar consulta</button>
                        </div>
                    </div>
                </form>
                <p><i>*Campos obligatorios</i></p>
            </div>
        </section>

        @include('includes.footer')
    </div>
    @include('includes.js')

</body>

</html>