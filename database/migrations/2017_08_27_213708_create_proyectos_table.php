<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('imagen');
            $table->string('responsable');
            $table->string('objetivo');
            $table->string('resumenCorto');
            $table->string('resumenLargo');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_categoria')->unsigned();
            $table->integer('id_profesor')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->foreign('id_profesor')->references('id')->on('profesors');
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
        Schema::dropIfExists('proyectos');
    }
}
