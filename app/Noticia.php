<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Noticia extends Model
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

    protected $table = "noticias";

    protected $fillable = ['titulo','descripcion','slug','id_usuario','id_categoria'];

    public function category()
     {
         return $this->belongsTo('App\Categoria','id_categoria','id');
     }
     public function users()
     {
         return $this->belongsTo('App\User','id_usuario','id');
     }
}
