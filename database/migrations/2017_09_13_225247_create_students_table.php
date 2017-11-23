<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carnet')->nullable();
            $table->string('primer_nombre')->default('Editar');
            $table->string('segundo_nombre')->default('');
            $table->string('primer_apellido')->default('Editar');
            $table->string('segundo_apellido')->default('');
            $table->integer('telefono')->nullable();
            $table->integer('careers_id')->unsigned()->nullable();
            $table->integer('id_usuario')->unsigned();
        
            $table->foreign('careers_id')->references('id')->on('careers')->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
}
