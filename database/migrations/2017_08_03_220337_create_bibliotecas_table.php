<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBibliotecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibliotecas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
<<<<<<< HEAD
            $table->string('path');
            $table->text('descripcion');
=======

            $table->string('pdf');
            $table->string('imagen');

            $table->string('path');
            $table->text('descripcion');

>>>>>>> 75055df8ce3b5c95837d939a7854c40c872f3f23
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_categoria')->unsigned();

            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_categoria')->references('id')->on('categorias');
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
        Schema::dropIfExists('bibliotecas');
    }
}
