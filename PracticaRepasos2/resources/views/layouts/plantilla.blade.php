<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])
</head>
<body class="min-vh-100">
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('rutaprincipal') }}">Sacra Scriptura</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('rutaregistro') }}">Registrar libro</a>
          </li>
        </ul>
        <img src="{{ asset('img/cowpolish.gif') }}" alt="Animación pequeña" style="width: 40px; height: auto;">
      </div>
    </div>
  </nav>


    @yield('contenido')

    <footer class="bg-dark text-white text-center text-lg-start mt-auto">
      <div class="text-center p-3">
          <div class="container">
              <span>&copy; {{ date('Y') }} Sacra Scriptura. Todos los derechos reservados.</span>
              <br>
              <small>{{ date('d') }} de {{ date('F') }} del {{ date('Y') }}</small>
          </div>
      </div>
  </footer>
  
</body>
</html>
