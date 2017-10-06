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

<<<<<<< HEAD
    protected $fillable = ['titulo','descripcion','slug','id_usuario','id_categoria'];
=======
    protected $fillable = ['titulo','descripcion','lugar','slug','image1','id_usuario','id_categoria'];
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47

    public function category()
     {
         return $this->belongsTo('App\Categoria','id_categoria','id');
     }
<<<<<<< HEAD
=======

     public function articleImg(){

         return $this->hasMany('App\File','id_noticias','id');
     }

    public function articleEvent(){

        return $this->hasOne('App\Concursos','id_noticia','id');
    }

>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
     public function users()
     {
         return $this->belongsTo('App\User','id_usuario','id');
     }
}
