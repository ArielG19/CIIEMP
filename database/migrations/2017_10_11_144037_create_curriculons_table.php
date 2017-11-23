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
            $table->text('resumen')->nullable();
            $table->text('titulos_academicos')->nullable();
            $table->text('estudios_doctorales')->nullable();
            $table->text('experiencia_laboral')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->enum('estado_civil',['soltero(a)','casado(a)'])->nullable();
            $table->string('direccion')->nullable();
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
