<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculons', function (Blueprint $table) {
            $table->increments('id');
            $table->text('resumen');
            $table->text('titulos_academicos');
            $table->text('estudios_doctorales');
            $table->text('experiencia_laboral');
            $table->string('nacionalidad');
            $table->enum('estado_civil',['solter@','casad@']);
            $table->string('direccion');
            $table->integer('id_usuario')->unsigned();
            
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('curriculons');
    }
}
