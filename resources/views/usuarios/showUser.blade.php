<!DOCTYPE html>
<html>
  <head>
    <title>Perfil del Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
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
                <a class="nav-link" href="{{ url('show/'.$user[0]->idUser) }}">Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('post/'.$user[0]->idUser) }}">Feed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('post/'.$user[0]->idUser) }}">Usuarios</a>
              </li>
            </ul>
          </div>
        </nav>
        <div id="contenido" class="container-fluid">
          <br><br><br>
          <h2>#{{ $user[0]->name}}</h2>
          <hr>
          <p>Email: {{ $user[0]->mail }}</p>
          <hr>
          <h2>Publicaciones</h2>
          @foreach ($posts as $post)
              <div class="publicacion">
              <h5>{{ $post->titulo}}</h5>
              <p>{{ $post->descripcion }}</p>
              <p class="fechaPost">{{ $post->fechaPost }}</p>
              </div>
          @endforeach
        </div>
      <div class="container-fluid">

  </body>
</html>
