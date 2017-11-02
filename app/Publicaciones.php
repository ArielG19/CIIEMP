<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    //
    protected $table = "publicaciones";
  	protected $fillable = ['id_autor','publicado_en','colaboradores','titulo_trabajo','fecha','link'];
}
