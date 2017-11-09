<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  protected $table = "files";

  protected $fillable = ['image','id_noticias','id_proyectos'];

  public function fileart()
   {
       return $this->belongsTo('App\Noticia','id_noticias','id');
   }

   public function fileproyect()
    {
        return $this->belongsTo('App\Proyecto','id_proyectos','id');
    }
}
