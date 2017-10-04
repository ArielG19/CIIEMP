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

}
