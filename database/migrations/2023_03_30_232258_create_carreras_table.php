<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrerasTable extends Migration
{
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
        });

        DB::table("carreras")->insert(['nombre' => "Administración Contable" ]);
        DB::table("carreras")->insert(['nombre' => "Administración de Recursos Humanos" ]);
        DB::table("carreras")->insert(['nombre' => "Análisis de Sistemas" ]);
        DB::table("carreras")->insert(['nombre' => "Gestión Ambiental y Salud" ]);
        DB::table("carreras")->insert(['nombre' => "Higiene y Seguridad en el Trabajo" ]);
        DB::table("carreras")->insert(['nombre' => "Laboratorio de Análisis Clí­nicos" ]);
        DB::table("carreras")->insert(['nombre' => "Logística" ]);
        DB::table("carreras")->insert(['nombre' => "Mantenimiento Industrial" ]);
    }

    public function down()
    {
        Schema::dropIfExists('carreras');
    }
}
