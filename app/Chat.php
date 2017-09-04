<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    //
    protected $table = "chats";
  	protected $fillable = ['mensaje','id_emisor','id_receptor'];


   	public function emisor()
   	{
       return $this->belongsTo('App\User','id_emisor');
   	}

   	public function receptor()
   	{
       return $this->belongsTo('App\User','id_receptor');
   	}

}
