<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $table = "categorias";
  protected $fillable = ['name'];


    public function blogs(){
    return $this->hasMany('App\Blog','id_categoria','id');

    }

    public function scopeSearch(){
      return $query->where('name','like','%'.$s.'%');
    }

    public function scopeSearchCategory($query, $name){
      return $query->where('name', $name);
    }
}
