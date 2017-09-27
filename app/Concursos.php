<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concursos extends Model
{
    protected $table = "concursos";

    protected $fillable = ['fecha_inicio','fecha_final','estado','id_usuario','id_noticia'];

    public function concursosart()
    {
        return $this->belongsTo('App\Noticia','id_noticia','id');
    }


}
