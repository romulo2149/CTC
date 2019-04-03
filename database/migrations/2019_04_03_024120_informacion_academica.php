<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InformacionAcademica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_academica', function (Blueprint $table) {
            $table->bigIncrements('id_academica');
            $table->enum('nivel', ['Preparatoria', 'Licenciatura', 'Maestría', 'Carrera Técnica']);
            $table->string('institucion');
            $table->string('programa');
            $table->string('anio_ingreso');
            $table->string('anio_egreso');
            $table->integer('id_usuario')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
