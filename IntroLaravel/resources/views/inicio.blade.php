<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    @vite(['resources/js/app.js'])
    <style>
        body, html {
            height: 100%;
        }
        .full-height {
            height: 100vh;
        }
    </style>
</head>
<body>
@section('titulo','Bienvenido Turista')
    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
        <h1 class="display-1">Bienvenido a tu aplicacion de viajes Paisa!</h1>
        <p>Presiona el boton "azul" para continuar</p>
        <a href="/form"  class="btn btn-primary">Registrate aqui</a>
        <a href="{{ route('rutaForm') }}" class="btn btn-danger">Inicio</a>
    </div>
</body>
</html>