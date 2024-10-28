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
            background-color: black !important; 
            color: white !important; 
        }
        .container {
            padding: 20px;
        }
        .spacer {
            margin-right: 30px; 
        }
        .card {
            background-color: #333 !important; 
            color: white !important; 
            border: none;
        }
        .list-group-item {
            background-color: #333 !important; 
            color: white !important; 
            border-color: #444;
        }
    </style>
</head>
<body>
    @yield('contenido')
</body>
</html>
