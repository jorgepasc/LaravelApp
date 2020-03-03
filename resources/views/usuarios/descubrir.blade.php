<!DOCTYPE html>
<html>
  <head>
    <title>Perfil del Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
      href="{{ asset ('css/bootstrap.min.css') }}" media="all">
    <style>
      h5, button{
        float: right;
      }

      p {
        float: left;
      }
    </style>
  </head>
  <body>
      <!--Esta nav se deberia sacar a un layout o a algo asi-->
      <div class="container-fluid">
        <nav class="container-fluid navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">APP</a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('show/'.$user[0]->idUser) }}">Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('post/'.$user[0]->idUser) }}">Feed</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('descubrir/'.$user[0]->idUser) }}">Usuarios</a>
              </li>
            </ul>
          </div>
        </nav>
        <div id="contenido" class="container-fluid">
          <br><br><br>
          <h2>Te puede interesar...</h2>
          @foreach ($usersNoSeguidos as $user)
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="d-inline">{{ $user->name}}</h3>
                <button class="btn btn-info d-inline">Seguir <i class="glyphicon glyphicon-plus"></i></btn>
              </div>
              <div class="panel-body">
                <p class="d-inline">{{ $user->mail }}</p>
                <h5 class="d-inline">Posts: {{ $user->publicaciones }}</h5>
              </div>
            </div>
          @endforeach
        </div>
      <div class="container-fluid">

  </body>
</html>
