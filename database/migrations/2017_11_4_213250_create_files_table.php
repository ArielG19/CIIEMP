<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->integer('id_noticias')->nullable();
            $table->integer('id_proyectos')->nullable();
            $table->timestamps();
            

            $table->foreign('id_noticias')->references('id')->on('noticias')->onDelete('cascade');
            $table->foreign('id_proyectos')->references('id')->on('proyectos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
