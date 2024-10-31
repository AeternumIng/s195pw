@extends('layouts.plantilla')
@section('titulo','Pagina Principal')
@section('contenido')

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Noticia Literaria</h5>
    <p class="card-text">El escritor Gabriel Garica Marquez murio a la edad de 78 años por ahogamiento en tepetongo</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</div>


@endsection