<!doctype html>
<html lang="es">

<head>
    <!--link para poder usar los iconos de awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Logo en la pestaña -->
    <link rel="shortcut icon" href="{{ URL::asset('images/logosmall.png') }}" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- JQuery -->
    <script src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
    <!--Validacion-->
    <script src="{{ URL::asset('js/validacion.js') }}"></script>
    <!--Tarjetas-->
    <script src="{{ URL::asset('js/tarjetas.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}">
    <!-- Botones -->
    <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/cssBotones.css') }}" />
   
    <!-- Footer -->
    <link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}" />
    <!-- Incluimos los modales -->
    @include('includes.modales.modalInicioSesion')
    @include('includes.modales.modalRegistro')