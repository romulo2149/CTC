<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Idioma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idioma', function (Blueprint $table) {
            $table->bigIncrements('id_idioma');
            $table->enum('idioma', ['Inglés', 'Francés', 'Mandarín', 'Italiano', 'Japonés', 'Neerlandés']);
            $table->decimal('porcentaje', 5, 2);
            $table->enum('certificado', ['TOEFL', 'etc']);
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
