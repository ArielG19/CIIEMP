<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
  protected $table = "bibliotecas";

  protected $fillable = ['id','titulo','path','id_usuario','id_categoria'];

  public function category()
   {
       return $this->belongsTo('App\Categoria','id_categoria','id');
   }
   public function users()
   {
       return $this->belongsTo('App\User','id_usuario','id');
   }

   public function setPathAttribute($path){

         if(!empty($path)){

           $nombre =time(). "." .$path->getClientOriginalExtension();
           $this->attributes['path'] = $nombre;
           \Storage::disk('localB')->put($nombre, \File::get($path));
         }

      }

      public function scopeSearch($query, $titulo){
        return $query->where('titulo','like', "%$titulo%");
      }
}
