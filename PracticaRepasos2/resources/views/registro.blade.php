@extends('layouts.plantilla')
@section('titulo','Registro')
@section('contenido')

<style>
  body {
    background-image: url('img/lib2.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
  }
  .form-container {
    background-color: rgba(255, 255, 255, 0.9); 
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    width: 300px;
  }
</style>

<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="form-container">
    <form>
      <div class="mb-3">
        <label for="ISBN" class="form-label">ISBN</label>
        <input type="number" class="form-control" name="ISBN" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="Titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" name="Titulo">
      </div>
      <div class="mb-3">
        <label for="Paginas" class="form-label">Paginas</label>
        <input type="number" class="form-control" name="Paginas">
      </div>
      <div class="mb-3">
        <label for="Año" class="form-label">Año</label>
        <input type="number" class="form-control" name="Año">
      </div>
      <div class="mb-3">
        <label for="Editorial" class="form-label">Editorial</label>
        <input type="text" class="form-control" name="Editorial">
      </div>
      <div class="mb-3">
        <label for="emailEditorial" class="form-label">Email de editorial</label>
        <input type="email" class="form-control" name="email de editorial">
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
</div>

@endsection
