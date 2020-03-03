<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\UsuariosSeguidos;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $posts = DB::select("SELECT * FROM posts INNER JOIN usuarios_seguidos ON posts.idUsuarioPost = usuarios_seguidos.idUsuarioSeguido JOIN usuarios ON usuarios.idUser = posts.idUsuarioPost WHERE usuarios_seguidos.idUsuario = " . $id);
        if (count($posts) > 0)
        {
          return view("/posts/index", ["posts" => $posts]);
        }
        else
        {
          return view("error/index");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return view("/posts/create", ["id" => $id]);
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
        $post = new Posts($request->all());
        $post->save();
        //echo $post . "INSERTADO";
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $post = Posts::find($request->id);
        $post->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->id;
        Posts::destroy($id);
        return back();
    }
}
