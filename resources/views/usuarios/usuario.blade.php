<!DOCTYPE html>
<html>
  <head>
  <title>User</title>
  </head>
  <body>
  <br>
  @foreach ($users as $user)
      <p>ID: {{ $user->id }}</p>
      <p>Nombre: {{ $user->name }}</p>
      <p>Contraseña: {{ $user->password }}</p>
      <p>Email: {{ $user->mail }}</p>
      <hr>
  @endforeach

  </body>
</html>
