<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  protected $table = "files";

  protected $fillable = ['image','id_noticias'];

  public function fileart()
   {
       return $this->belongsTo('App\Noticia','id_noticias','id');
   }
}
