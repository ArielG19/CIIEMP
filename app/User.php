<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function blogs(){
        return $this->hasMany('App\Blog');
    }

<<<<<<< HEAD
    public function comentario()
    {
=======
    public function profesors(){

        return $this->hasOne('App\Profesor','id_usuario','id');
    }

      public function comentario()
   {
>>>>>>> 6298a5da7c429c4148587ff464232a60c953d456
       return $this->hasMany('App\Comentario');
    }

    public function chats()
    {
        return $this->belongsToMany('App\Chat','chat_user');
    }





}
