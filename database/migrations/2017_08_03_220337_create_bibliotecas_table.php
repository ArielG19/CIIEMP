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
<<<<<<< HEAD:database/migrations/2017_08_03_220337_create_bibliotecas_table.php
            $table->string('path');
            $table->text('descripcion');
=======
            $table->string('pdf');
            $table->string('imagen');
>>>>>>> 3015acd583e4ea9d1428a09c83059df65de11e17:database/migrations/2017_08_03_214234_create_bibliotecas_table.php
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
