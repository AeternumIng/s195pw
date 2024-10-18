<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversiones</title>
    @vite(['resources/js/app.js'])
</head>
<body>
        <div class="container mt-5">
            <h2>Convierte Megabites a Gigabites</h2>
            <form action ="{{route('rutamg')}}" method= "POST">
                @csrf
                <div class="form-group">
                    <label>Ingresa el numero</label>
                    <input type="number" class="form-control" name="numero" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </form>

            <h1> El resultado es: {{$mgconversion ?? '0'}}</h1>  <!-- Las interrogaciones buscan primero el valor izq y luego el derecho -->
        </div>


        <div class="container mt-5">
            <h2>Gigabites a Megabites</h2>
            <form action ="{{route('rutagm')}}" method= "POST">
                @csrf
                <div class="form-group">
                    <label>Ingresa el numero</label>
                    <input type="number" class="form-control" name="numero" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </form>

            <h1> El resultado es: {{$gmconversion ?? '0'}}</h1>  <!-- Las interrogaciones buscan primero el valor izq y luego el derecho -->
        </div>



        <div class="container mt-5">
            <h2>Gigabites a Terabites</h2>
            <form action ="{{route('rutagt')}}" method= "POST">
                @csrf
                <div class="form-group">
                    <label>Ingresa el numero</label>
                    <input type="number" class="form-control" name="numero" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </form>

            <h1> El resultado es: {{$gtconversion ?? '0'}}</h1>  <!-- Las interrogaciones buscan primero el valor izq y luego el derecho -->
        </div>



        <div class="container mt-5">
            <h2>Terabites a Gigabites</h2>
            <form action ="{{route('rutatg')}}" method= "POST">
                @csrf
                <div class="form-group">
                    <label>Ingresa el numero</label>
                    <input type="number" class="form-control" name="numero" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </form>

            <h1> El resultado es: {{$tgconversion ?? '0'}}</h1>  <!-- Las interrogaciones buscan primero el valor izq y luego el derecho -->
        </div>
</div>
</body>
</html>
