<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAlumno extends Controller
{


  public function index(){ // funcion que llamamos desde web.php
  return "Bienvenido al index del alumno";
}

}
