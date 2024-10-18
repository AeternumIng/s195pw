<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card" style="width: 18rem;">
            <div class="d-flex justify-content-center">
                <img src="..." class="card-img-top" alt="...">
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Practica de Repaso Biografica</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush text-center">
                <li class="list-group-item">Rogelio Ernesto Arteaga Velazco</li>
                <li class="list-group-item">Ivan Isay Guerra Lopez</li>
                <li class="list-group-item">Programacion Web</li>
                <li class="list-group-item">S195-7</li>
            </ul>
            <div class="card-body text-center">
                <!-- Botón REPASO 1 -->
                <a href="{{route('Conversiones')}}" class="btn btn-primary">Conversiones</a>
            </div>
        </div>
    </div>
    
</div>
</body>
</html>
