<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model
{
  use Sluggable;

  protected $table = "blogs";
  protected $fillable = ['titulo'];
  protected $fillable = ['descripcion'];
  protected $fillable = ['path'];
  protected $fillable = ['tags'];
  protected $fillable = ['id_usuario'];
  protected $fillable = ['id_categoria'];

  @return array

  public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


  public function categoria()
   {
       return $this->belongsTo('App\Categoria');
   }
   public function user()
   {
       return $this->belongsTo('App\User');
   }

}
