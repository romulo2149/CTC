<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InformacionCertificaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_certificaciones', function (Blueprint $table) {
            $table->bigIncrements('id_info_certificacion');
            $table->integer('id_libreta_cert')->unsigned();
            $table->date('obtencion');
            $table->date('vigencia');
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
