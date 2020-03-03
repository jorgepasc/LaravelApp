<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Study extends Model
{
 protected $table = 'estudio';
 $primaryKey = 'id_estudio';
 public $timestamps = false;
}
