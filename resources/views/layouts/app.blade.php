<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <!-- Includiamo gli assets con la direttiva vite -->
  @vite('resources/js/app.js')
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('comics.home') }}">Archivio Fumetti</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'comics.home' ? 'active' : '' }}" href="{{ route('comics.home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'comics.create' ? 'active' : '' }}" href="{{ route('comics.create') }}">Crea</a>
        </li>
      </ul>
    </div>
  </nav>

  <main>
    @yield('content')
  </main>

</body>

</html>
