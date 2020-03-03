<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use App\Posts;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

/*
   public function showLogin()
     {
         // Verificamos si hay sesión activa
         if (Auth::check())
         {
             // Si tenemos sesión activa mostrará la página de inicio
             return Redirect::to('/');
         }
         // Si no hay sesión activa mostramos el formulario
         return View::make('login');
     }


     public function postLogin()
       {
           // Obtenemos los datos del formulario
           $data = [
               'username' => Input::get('username'),
               'password' => Input::get('password')
           ];

           // Verificamos los datos
           if (Auth::attempt($data, Input::get('remember'))) // Como segundo parámetro pasámos el checkbox para sabes si queremos recordar la contraseña
           {
               // Si nuestros datos son correctos mostramos la página de inicio
               return Redirect::intended('/');
           }
           // Si los datos no son los correctos volvemos al login y mostramos un error
           return Redirect::back()->with('error_message', 'Invalid data')->withInput();
       }


       public function logOut()
          {
              // Cerramos la sesión
              Auth::logout();
              // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
              return Redirect::to('login')->with('error_message', 'Logged out correctly');
          }

          */

  public function index($id)
  {
      // Cargamos el objeto user logeado y se lo pasamos a la vista
      $user = Usuarios::find($id);
      echo $user;
      //return view("usuario", ["users" => $users]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create(Request $request)
   {
       //
       return view("/usuarios/create", ["id" => $id]);
   }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
  }

  /**
   * Aqui llegara el id del usuario logeado correctamente y le mostraremos su perfil
   *
   * @param  int  $id - En un futuro
   */
  public function show($id)
  {
      $user = Usuarios::where("idUser", "=", $id)->get();
      $posts = Posts::where('idUsuarioPost', 'like', $id)->orderBy('fechaPost', 'asc')->get();
      return view("/usuarios/showUser", ["user" => $user], ["posts" => $posts]);
  }

  /**
   * Aqui llegara el id del usuario logeado correctamente y le mostraremos usuarios que no sigue
   *
   * @param  int  $id - En un futuro
   */
   public function descubrir($id)
  {
      // Metemos en un array repetido el id porque el metodo de DB pide un array para las prepared statements
      $values = [$id, $id];
      // Usuarios que no sigue el usuario actual
      $usuariosNoSeguidos = DB::select('SELECT idUser, name, mail, count(idPost) as publicaciones
      FROM usuarios left join posts on posts.idUsuarioPost = usuarios.idUser
      GROUP BY idUser, name, mail HAVING idUser != ? AND idUser NOT IN
      (SELECT idUsuarioSeguido FROM usuarios_seguidos WHERE idUsuario = ?)', $values);

      $userActual = Usuarios::where("idUser", "=", $id)->get();
      return view("/usuarios/descubrir", ["user" => $userActual], ["usersNoSeguidos" => $usuariosNoSeguidos]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
      $user = $_POST["login"];
      echo $user;

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }


  public function login(Request $request)
  {
      $login = $request->login;
      $password = $request->password;
      $users = Usuarios::all();
      foreach ($users as $user) {
        if ($user->name == $login && $user->password == $password)
        {
          echo "OK!!!";
          redirect("/show/".$user->name);
        }
      }
    }



}
