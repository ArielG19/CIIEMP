<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Input;
use Image;


class Blog extends Model
{
<<<<<<< HEAD
  use Sluggable, SluggableScopeHelpers;

  public function sluggable()
=======
    use Sluggable, SluggableScopeHelpers;

    public function sluggable()
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
    {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }

<<<<<<< HEAD
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
=======
    protected $table = "blogs";

    protected $fillable = ['titulo', 'descripcion', 'slug', 'path', 'file', 'tags', 'id_usuario', 'id_categoria'];


    public function category()
    {
        return $this->belongsTo('App\Categoria', 'id_categoria', 'id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'id_usuario', 'id');
    }

    public function comentarios()
    {
        return $this->hasMany('App\Comentario', 'id_blog', 'id');
    }

    public function setFileAttribute($file)
    {

        if (!empty($file)) {

            $nombre = time() . "." . $file->getClientOriginalExtension();
            $this->attributes['file'] = $nombre;
            \Storage::disk('localB')->put($nombre, \File::get($file));
        }

    }
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47

}
