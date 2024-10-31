@extends('layouts.plantilla')
@section('tiutlo','Registro')
@section('contenido')



<form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">ISBN</label>
      <input type="number" class="form-control" name="ISBN" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Titulo</label>
      <input type="text" class="form-control" name="Titulo">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Paginas</label>
        <input type="number" class="form-control" name="Paginas">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Año</label>
        <input type="number" class="form-control" name="Año">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Editorial</label>
        <input type="text" class="form-control" name="Editorial">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">email de editorial</label>
        <input type="email" class="form-control" name="email de editorial">
      </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>





@endsection

