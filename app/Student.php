<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
  protected $table = "students";
  protected $fillable = ['carnet','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','telefono','careers_id','id_usuario'];
}
