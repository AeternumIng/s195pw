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

@session('Exito')
<script>
  document.addEventListener("DOMContentLoaded", function() {
    Swal.fire({
      icon: "success",
      title: "Has guardado tu libro exitosamente",
      text: '{{$value}}',
      showConfirmButton: false,
      timer: 1500
    });
  });
</script>
@endsession

<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="form-container">
    <form action="/guardarlibro" method="POST">
      @csrf
      <div class="mb-3">
        <label for="ISBN" class="form-label">ISBN</label>
        <input type="number" class="form-control" name="ISBN" value="{{old('ISBN')}}">
        <small class="text-danger fst-italic">{{$errors->first('ISBN')}}</small>
      </div>
      <div class="mb-3">
        <label for="Titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" name="Titulo" value="{{old('Titulo')}}">
        <small class="text-danger fst-italic">{{$errors->first('Titulo')}}</small>
      </div>
      <div class="mb-3">
        <label for="Paginas" class="form-label">Paginas</label>
        <input type="number" class="form-control" name="Paginas"  value="{{old('Paginas')}}">
        <small class="text-danger fst-italic">{{$errors->first('Paginas')}}</small>
      </div>
      <div class="mb-3">
        <label for="Año" class="form-label">Año</label>
        <input type="number" class="form-control" name="Año" value="{{old('Año')}}">
        <small class="text-danger fst-italic">{{$errors->first('Año')}}</small>
      </div>
      <div class="mb-3">
        <label for="Editorial" class="form-label">Editorial</label>
        <input type="text" class="form-control" name="Editorial" value="{{old('Editorial')}}">
        <small class="text-danger fst-italic">{{$errors->first('Editorial')}}</small>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="{{old('email')}}">
        <small class="text-danger fst-italic">{{$errors->first('email')}}</small>
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
</div>

@endsection
