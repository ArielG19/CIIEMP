<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('carrera');
            //$table->string('descripcion');

            $table->timestamps();
        });

         /*Schema::create('estudiante_carrera', function (Blueprint $table){
            $table->increments('id');
            $table->integer('estudiante_id')->unsigned();
            $table->integer('carrera_id')->unsigned();

            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->foreign('carrera_id')->references('id')->on('careers');
            $table->timestamps();
        });*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careers');
    }
}
