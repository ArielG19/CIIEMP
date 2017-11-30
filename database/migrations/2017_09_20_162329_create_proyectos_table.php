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
            $table->string('responsable')->nullable(true);
            $table->text('historia')->nullable(true);
            $table->text('resumenCorto')->nullable(true);
            $table->text('resumenLargo');
            $table->string('tipo');
            $table->string('tel')->nullable(true);
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_categoria')->unsigned();
            $table->integer('teacher_id')->unsigned()->nullable(true);


            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers');
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
