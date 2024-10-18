<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])
    <style>
        
        body {
            margin: 0;
            padding: 0;
            background-color: black !important; /* Fondo negro forzado */
            color: white !important; /* Texto blanco forzado */
        }

        /* Asegurarse de que los elementos no toquen los bordes */
        .container {
            padding: 20px;
        }

        /* Espacio entre la tarjeta y la imagen */
        .spacer {
            margin-right: 30px; /* Separación entre la tarjeta y la imagen */
        }

        /* Personalización de la tarjeta */
        .card {
            background-color: #333 !important; /* Fondo de la tarjeta oscuro forzado */
            color: white !important; /* Texto blanco forzado en la tarjeta */
            border: none;
        }

        
        .list-group-item {
            background-color: #333 !important; 
            color: white !important; /* Texto blanco forzado */
            border-color: #444;
        }
    </style>
</head>
<body>
    @yield('contenido')
</body>
</html>
