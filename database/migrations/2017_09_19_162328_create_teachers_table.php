<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('primer_nombre')->default('Editar');
            $table->string('segundo_nombre')->default('Editar');
            $table->string('primer_apellido')->default('Editar');
            $table->string('segundo_apellido')->default('Editar');
            $table->integer('telefono')->nullable();
            $table->string('profesion1')->default('Editar');
            $table->string('profesion2')->default('Editar');
            $table->string('profesion3')->default('Editar');
            $table->string('profesion4')->default('Editar');
            
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
        Schema::dropIfExists('teachers');
    }
}
