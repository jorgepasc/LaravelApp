<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get("sergio",function(){
  return ("sergio martinez");
});


Route::get("alumno",function(){
  return ("Soy el alumno");
});

Route::get("profesor",function(){
  return ("Soy el profesor");
});


Route::get("usuario/{id}","UsuarioController@index"); // Muestra el metodo index de ControllerUsuario
Route::get("show/{id}","UsuarioController@show");
Route::get("descubrir/{id}","UsuarioController@descubrir");
Route::post("login","UsuarioController@login");

Route::get("post/{id}","PostController@index");
Route::get("crear","PostController@store");
Route::get("eliminar","PostController@destroy");
Route::get("actualizar","PostController@update");



//Route::get("alumno","ControllerAlumno@index");
