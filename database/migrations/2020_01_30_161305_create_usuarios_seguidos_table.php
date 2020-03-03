<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosSeguidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_seguidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idUsuario');
            $table->bigInteger('idUsuarioSeguido');
            $table->foreign("idUsuario")->references("id")->on("usuarios");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_seguidos');
    }
}
