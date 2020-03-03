<?php

/*
Crear la clase controlador. Ejecutar desde la ruta /entornods/data/laravel

docker exec -t laravel bash
- php artisan make:controller  ControllerUsuario
*/

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Request;

class ControllerUsuario extends Controller
{

    public function index(){


      $user = factory(App\Usuarios::class)->make();


      /*
      $user = factory(App\Usuarios::class)->make
        'name' => 'Jorge',
        'mail' => 'Abigail',
        'password' => 'sergio',
      ]);*/
      /*$flights = App\Flight::all();

      foreach ($flights as $flight) {
        echo $flight->name;
      }*/

      return "Bienvenido al index de usuarios";
    }

}
