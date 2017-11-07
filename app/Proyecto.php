<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
    protected $table = "proyectos";

  	protected $fillable = ['id','titulo','imagen','responsable','historia','resumenCorto','resumenLargo','id_usuario','id_categoria','teacher_id'];

   public function users()
   {
       return $this->belongsTo('App\User','id_usuario','id');
   }

     public function category()
   {
       return $this->belongsTo('App\Categoria','id_categoria','id');
   }

       public function profesor()
   {
       return $this->belongsTo('App\Teacher','teacher_id','id');
   }

    public function proyectoImg(){

        return $this->hasMany('App\File','id_proyectos','id');
    }




}
