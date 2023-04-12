<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenerosTable extends Migration
{
    public function up()
    {
        Schema::create('generos', function (Blueprint $table) {
            $table->increments('id_genero');
            $table->string('tipo');
        });

        DB::table("generos")->insert(['tipo' => "Hombre" ]);
        DB::table("generos")->insert(['tipo' => "Mujer" ]);
    }

    public function down()
    {
        Schema::dropIfExists('generos');
    }
}
