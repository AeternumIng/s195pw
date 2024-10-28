@extends('layouts.plantilla')

@section('titulo','Clientes')

@section('contenido')
  <div class="container mt-5 col-md-8">
    <div class="card text-justify font-monospace">
      <div class="card-header fs-5 text-primary">
        Ivan Drago Guerra Lopez <!--Se deja?-->
      </div>
      <div class="card-body">
        <h5 class="fw-bold">ivanprograweb@upq.com</h5>
        <p class="card-text fw-lighter">4422101616</p>
      </div>
      <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
      <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
    </div>
  </div>
</body>
</html>
@endsection