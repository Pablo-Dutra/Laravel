<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Ofertas</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="nav-item @yield('lnk_home')"><a href="/">Home</a></li>
      @auth
      <li class="nav-item @yield('lnk_novo')"><a href="/oferta/create">Cadastrar nova oferta</a></li>
      @endauth
      @guest
      <li><a href="/login">Login</a></li>
      <li><a href="/register">Registre-se</a></li>
      @endguest
    </ul>
    @auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger navbar-btn">Sair</button>
    </form>
    @endauth
  </div>
</nav>
  
<div class="container" style="margin-top:50px">
    @yield('content')
</div>
</body>
</html>