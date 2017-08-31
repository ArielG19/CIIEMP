<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->increments('id');
            $table->text('mensaje');
            $table->integer('id_emisor')->unsigned();
            $table->integer('id_receptor')->unsigned();

            $table->foreign('id_emisor')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_receptor')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chats');
    }
}
