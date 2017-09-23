<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $table = "categorias";
  protected $fillable = ['name'];


  public function blogs(){
    return $this->hasMany('App\Blog');

    }
 	public function proyectos(){
    return $this->hasMany('App\Proyecto');

    }
    public function scopeSearch(){
      return $query->where('name','like','%'.$s.'%');
    }
}
