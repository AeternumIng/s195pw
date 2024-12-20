@extends('layouts.plantilla')

@section('titulo', 'Registro Clientes')

@section('contenido')

<div class="container mt-5 col-md-6">
    @if(session('exito'))
        <x-Alert tipo="success">{{ session('exito') }}</x-Alert>

        <script>
            Swal.fire({
                title: "Respuesta del Servidor!",
                text: '{{ session('exito') }}',
                icon: "success"
            });
        </script>
    @endif

    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">
            {{__('Registro de Clientes')}}
        </div>
        <div class="card-body text-justify">
            <form action="/enviarCliente" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="txtnombre" value="">
                    <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido:</label>
                    <input type="text" class="form-control" name="txtapellido" value="">
                    <small class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo:</label>
                    <input type="text" class="form-control" name="txtcorreo" value="">
                    <small class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="text" class="form-control" name="txttelefono" value="">
                    <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                </div>
                <div class="d-grid gap-2 mt-2 mb-1">
                    <button type="submit" class="btn btn-success btn-sm">{{__('Guardar Cliente')}}</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-muted"></div>
    </div>
</div>

@endsection
