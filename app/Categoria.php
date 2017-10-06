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

    public function biblios(){
    return $this->hasMany('App\Biblioteca','id_categoria','id');

    }
<<<<<<< HEAD

=======
 	public function proyectos(){
    return $this->hasMany('App\Proyecto');

    }
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
    public function scopeSearch(){
      return $query->where('name','like','%'.$s.'%');
    }

    public function scopeSearchCategory($query, $name){
      return $query->where('name', $name);
    }
}
