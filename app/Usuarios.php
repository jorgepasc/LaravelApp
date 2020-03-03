<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
  /*protected $table = 'Usuario';
  protected $primaryKey = 'IdUsuario';
  //public $incrementing = false; // Por defecto es true
  public $timestamps = false; // Evita que se creen las columnas created_at updated_at
  protected $attributes = [
        'delayed' => false,
  ];
  protected $SergioEsTonto;*/
  protected $fillable = [
      'name', 'mail', 'password',
  ];
}
