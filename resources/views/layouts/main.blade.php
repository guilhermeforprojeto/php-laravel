<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>
  <!-- fontes dos Google  -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet" />
  <!-- CSS bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

  <!-- CSS da aplicação -->
  <link rel="stylesheet" href="/css/styles.css" />

</head>

<body class="antialiased">
  <header>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
          <img src="/img/SystemBeeEventos_logo.svg" alt="logo"></a>
      </div>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/" class="nav-link">Eventos</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/events/create" class="nav-link">Criar Eventos</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/" class="nav-link">Entrar</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/" class="nav-link">Cadastrar</a>
        </li>
      </ul>
    </nav>
  </header>
  <main>
    <div class="container-fluit">
      <div class="row">
        @if(session('msg'))
        <p class="msg">{{ session('msg')}}
          @endif
          @yield('content')
      </div>
    </div>
  </main>
  <footer>
    <p>HDC Events &copy; System Bee 2022</p>
  </footer>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>


</html>