<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
    protected $table = "comentarios";
  	protected $fillable = ['comentario','id_blog','id_usuario'];


    public function user()
   {
       return $this->belongsTo('App\User','id_usuario');
   }

    public function blog()
    {
      return $this->belongsTo('App\Blog','id_blog');

    }

}
