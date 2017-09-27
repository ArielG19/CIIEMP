<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concursos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('fecha_inicio');
            $table->timestamp('fecha_final');
            $table->enum('estado',['activo','finalizado']);
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_noticia')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_noticia')->references('id')->on('noticias');
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
        Schema::dropIfExists('concursos');
    }
}
