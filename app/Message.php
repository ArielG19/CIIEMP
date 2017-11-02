<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $table = "messages";
  	protected $fillable = ['mensaje','id_emisor','id_receptor','conversation_id'];

}
