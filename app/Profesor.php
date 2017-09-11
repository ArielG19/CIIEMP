<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
  protected $table = "profesors";

  protected $fillable = ['primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','descripcion','telefono','id_usuario'];

  public function users()
  {
      return $this->hasOne('App\User','id_usuario','id');
  }

}
