<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->string('correo_electronico')->unique();
            $table->string('password');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->enum('rol', ['Freelancer', 'Cliente']);
            $table->date('fecha_nacimiento');
            $table->string('sitio_web')->nullable();
            $table->string('empresa')->nullable();
            $table->boolean('correo_verificado')->nullable();
            $table->boolean('identidad_verificada')->nullable();
            $table->string('ciudad_residencia');
            $table->string('celular');
            $table->string('telefono')->nullable();
            $table->decimal('rating', 4, 2);
            $table->integer('suscripcion')->unsigned();
            $table->date('suscripcion_valida');
            $table->boolean('autorenovacion')->default(true);
            $table->string('token_verificacion', 20);
            $table->string('firma_electronica', 25);
            $table->rememberToken();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE usuarios ADD foto_perfil MEDIUMBLOB null');
        DB::statement('ALTER TABLE usuarios ADD id_frente MEDIUMBLOB null');
        DB::statement('ALTER TABLE usuarios ADD id_atras MEDIUMBLOB null');
        DB::statement('ALTER TABLE usuarios ADD comprobante_domicilio MEDIUMBLOB null');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
