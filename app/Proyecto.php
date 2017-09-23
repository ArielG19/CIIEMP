<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
    protected $table = "proyectos";

  	protected $fillable = ['id','titulo','imagen','responsable','objetivo','resumenCorto','resumenLargo','id_usuario'];

   public function users()
   {
       return $this->belongsTo('App\User','id_usuario','id');
   }

     public function category()
   {
       return $this->belongsTo('App\Categoria','id_categoria','id');
   }

}
