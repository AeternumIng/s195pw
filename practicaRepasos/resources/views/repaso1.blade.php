@extends('layouts.plantilla')
@section('titulo', 'Conversiones')
@section('contenido')

    <div class="container mt-5">
        <div class="row g-4">

            <div class="col-md-6">
                <div class="card p-4">
                    <h2 class="card-title">Convierte Megabites a Gigabites</h2>
                    <form action ="{{route('rutamg')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                    <label for="numero" class="form-label">Ingresa el número</label>
                    <input type="number" class="form-control" name="numero" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Clic aqui</button>
                    </form>
                    <h1 class="mt-3">El resultado es: {{$mgconversion ?? '0'}}</h1>
                </div>
            </div>

                <div class="col-md-6">
                    <div class="card p-4">
                    <h2 class="card-title">Convierte Gigabites a Megabites</h2>
                    <form action ="{{route('rutagm')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                    <label for="numero" class="form-label">Ingresa el número</label>
                    <input type="number" class="form-control" name="numero" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Clic aqui</button>
                    </form>
                    <h1 class="mt-3">El resultado es: {{$gmconversion ?? '0'}}</h1>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4">
                    <h2 class="card-title">Convierte Gigabites a Terabites</h2>
                    <form action ="{{route('rutagt')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                    <label for="numero" class="form-label">Ingresa el número</label>
                    <input type="number" class="form-control" name="numero" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Clic aqui</button>
                    </form>
                    <h1 class="mt-3">El resultado es: {{$gtconversion ?? '0'}}</h1>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4">
                    <h2 class="card-title">Convierte Terabites a Gigabites</h2>
                    <form action ="{{route('rutatg')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                    <label for="numero" class="form-label">Ingresa el número</label>
                    <input type="number" class="form-control" name="numero" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Clic aqui</button>
                    </form>
                    <h1 class="mt-3">El resultado es: {{$tgconversion ?? '0'}}</h1>
                </div>
            </div>
    </div>
    </div>
@endsection