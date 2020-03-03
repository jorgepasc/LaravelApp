<!DOCTYPE html>
<html>
  <head>
  <title>Posts</title>
  <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
      * {
        margin: 4px;
        padding: 4px;
      }

      body {
        background-color: #e8e8e8;
      }

      hr {
        height: 1px;
      }

      .verde {
        background-color: #5CB85C;
      }

      .gris {
        background-color: #c9d3c9;
      }

    </style>
  </head>
  <body>
    <h4>CREAR Usuario</h4>
    <form method="get" action="/crear">
      <div class="form-group">
        <label for="id">Id: </label><input id="id" type="number" name="id" value="1" class="form-control" readonly>
        <label for="name">Nombre: : </label><input id="name" type="number" name="name" class="form-control" readonly>
        <label for="mail">Email:</label><input id="mail" type="text" name="mail" class="form-control">
        <label for="password">Contraseña: </label><input id="password" type="password" name="password" class="form-control">

        <br><button type="submit" class="btn btn-success">Crear usuario</button>
      </div>
    </form>

  </body>
</html>
