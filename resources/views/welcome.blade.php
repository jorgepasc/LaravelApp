<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
      <h2>Juan</h2>
      <form method="post" action="/login">
        {{ csrf_field() }}
        Usuario: <input type="text" name="login"><br>
        Contraseña: <input type="password" name="password"><br>
        <button type="submit">Iniciar sesión</button>

      </form>
    </body>
</html>
