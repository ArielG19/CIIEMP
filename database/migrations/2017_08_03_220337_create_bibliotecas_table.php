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
<<<<<<< HEAD:database/migrations/2017_08_03_214234_create_bibliotecas_table.php
            $table->string('pdf');
            $table->string('imagen');
=======
            $table->string('path');
            $table->text('descripcion');
>>>>>>> c9fe5c2b60d00e3b3074a302a294d0c7183378fa:database/migrations/2017_08_03_220337_create_bibliotecas_table.php
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
