<!DOCTYPE html>
<html>
  <head>
  <title>Posts</title>
  <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
      href="{{ asset ('css/bootstrap.min.css') }}" media="all">
  </head>
  <body>
    <!--Esta nav se deberia sacar a un layout o a algo asi-->
    <div class="container-fluid">
      <nav class="container-fluid navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">APP</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('show/'.$posts[0]->idUsuario) }}">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('post/'.$posts[0]->idUsuario) }}">Feed</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Usuarios</a>
            </li>
          </ul>
        </div>
      </nav>
      <h4>FEED</h4>
      <hr>
      @foreach ($posts as $post)
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="d-inline">{{ $post->titulo }}</h3>
            <h5 class="d-inline"> - by {{ $post->name }}</h5>
          </div>
          <div class="panel-body">
            <p style="font-size: 20px">{{ $post->descripcion }}</p>
            <p>{{ $post->fechaPost }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </body>
</html>
