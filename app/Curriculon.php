<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculon extends Model
{
    //
    protected $table = "curriculons";
  	protected $fillable = ['resumen','titulos_academicos','estudios_doctorales','experiencia_laboral','nacionalidad','estado_civil','direccion','id_usuario'];
}
