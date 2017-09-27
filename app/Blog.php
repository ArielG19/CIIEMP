<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Input;
use Image;


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
