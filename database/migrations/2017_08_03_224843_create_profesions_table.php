<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profesion');
            $table->string('descripcion');

            $table->timestamps();
        });

         Schema::create('profesor_profesion', function (Blueprint $table){
            $table->increments('id');
            $table->integer('profesor_id')->unsigned();
            $table->integer('profesion_id')->unsigned();

            $table->foreign('profesor_id')->references('id')->on('profesors');
            $table->foreign('profesion_id')->references('id')->on('profesions');
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
        Schema::dropIfExists('profesor_profesion');
        Schema::dropIfExists('profesions');
    }
}
