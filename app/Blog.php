<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;


class Blog extends Model
{
  use Sluggable, SluggableScopeHelpers;

  public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }

  protected $table = "blogs";

  protected $fillable = ['titulo','descripcion','slug','path','tags','id_usuario','id_categoria'];

  public function setPathAttribute($path){

        if(!empty($path)){
          $nombre = $path->getClientOriginalName();
          $this->attributes['path'] = $nombre;
          \Storage::disk('local')->put($nombre, \File::get($path));
        }

     }






  public function category()
   {
       return $this->belongsTo('App\Categoria','id_categoria','id');
   }
   public function users()
   {
       return $this->belongsTo('App\User','id_usuario','id');
   }

    public function comentarios()
   {
       return $this->hasMany('App\Comentario');
   }

}
