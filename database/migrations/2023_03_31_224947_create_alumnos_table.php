<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellido', 100);
            $table->string('direccion');
            $table->integer('telefono');
            $table->string('email');
            $table->date('fecha_nac');
            $table->integer('id_genero')->unsigned()->nullable();
            $table->integer('id_carrera')->unsigned()->nullable();

            $table->foreign('id_genero')
                    ->references('id')->on('generos')
                    ->onDelete('cascade');

            $table->foreign('id_carrera')
                    ->references('id')->on('carreras')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
