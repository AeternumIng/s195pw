@extends('layouts.plantilla')
@section('titulo','Pagina Principal')
@section('contenido')

<style>
  body {
    background-image: url('img/lib2.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
  }
  .card {
    background-color: rgba(255, 255, 255, 0.9); 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    margin-bottom: 20px; 
  }
  .gif {
    width: 100%; 
    height: auto; 
    max-height: 150px; 
    border-radius: 8px;
    margin-bottom: 15px; 
  }
  .main-card {
    margin-top: 60px; 
    margin-bottom: 20px; 
  }
  .column {
    display: flex;
    flex-direction: column; 
    align-items: center;
    margin-top: 20px; 
  }
</style>

<div class="d-flex flex-column align-items-center" style="min-height: 100vh;">
  <!-- Tarjeta 1 (Principal) -->
  <div class="card text-center mx-4 main-card" style="width: 16rem;">
    <div class="card-body">
      <img src="{{ asset('img/book.gif') }}" alt="book" class="gif">
      <h5 class="card-title mt-3">Noticia Literaria</h5>
      <p class="card-text">La zona donde tus historias fantásticas se vuelven realidad con un alcance tan mínimo como dos enamorados durante el verano</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">An item</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
    </ul>
  </div>

  <!-- Contenedor de las demás tarjetas -->
  <div class="d-flex justify-content-center align-items-start mt-4">
    <!-- Tarjeta 2 -->
    <div class="column">
      <div class="card mx-2" style="width: 18rem;">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>La lectura es para la mente lo que el ejercicio es para el cuerpo.</p>
            <footer class="blockquote-footer">Joseph Addison</footer>
          </blockquote>
        </div>
      </div>

      <!-- Tarjeta 3 -->
      <div class="card mx-2" style="width: 18rem;">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>Un libro es un sueño que tienes en tus manos.</p>
            <footer class="blockquote-footer">Neil Gaiman</footer>
          </blockquote>
        </div>
      </div>
    </div>

    <!-- Tarjetas 4 y 5 en una segunda columna -->
    <div class="column">
      <div class="card mx-2" style="width: 18rem;">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>Los libros son la más poderosa de todas las herramientas.</p>
            <footer class="blockquote-footer">Malcolm X</footer>
          </blockquote>
        </div>
      </div>

      <div class="card mx-2" style="width: 18rem;">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>La literatura no es un lujo, sino una necesidad.</p>
            <footer class="blockquote-footer">Goran Persson</footer>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
