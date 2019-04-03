<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MetodoPago extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodo_pago', function (Blueprint $table) {
            $table->bigIncrements('id_metodo_pago');
            $table->enum('tipo', ['Tarjeta Débito', 'Tarjeta Crédito', 'PayPal']);
            $table->string('numero_cuenta')->nullable();
            $table->string('terminacion')->nullable();
            $table->string('csv')->nullable();
            $table->string('nombre_cuenta')->nullable();
            $table->string('titular');
            $table->date('fecha_vencimiento');
            $table->enum('operador', ['VISA', 'MasterCard']);
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
