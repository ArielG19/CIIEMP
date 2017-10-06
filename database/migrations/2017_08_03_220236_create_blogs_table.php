<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->string('slug')->nullable();
            $table->string('path')->nullable();
=======
            $table->string('titulo')->unique();
            $table->text('descripcion')->nullable();
            $table->string('slug')->unique();
            $table->string('path')->nullable();
            $table->string('file')->nullable();
>>>>>>> 696399a1ae1183c398a2cdaee84fb00c9a445b47
            $table->string('tags');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_categoria')->unsigned();

            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');
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

        Schema::dropIfExists('blogs');
    }
}
