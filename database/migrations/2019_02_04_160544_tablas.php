<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tablas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function(Blueprint $table) {
            $table->increments('id');
            $table->string('username', 50);
            $table->string('password', 255);
            $table->string('email', 100);
            $table->string('rol', 1)->default(1);
        });

        Schema::create('personas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('cedula', 20);
            $table->string('nombre', 20);
        });

        Schema::create('vehiculos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('placa', 20);
            $table->string('marca', 20);
            $table->string('modelo', 20);
            $table->string('color', 20);
            $table->unsignedInteger("persona");
            $table->foreign('persona')->references('id')->on('personas');
            $table->timestamps();
        });

        Schema::create('puestos', function(Blueprint $table) {
            $table->increments('id');
            $table->string("puesto");
            $table->string("estado")->default(1);
        });

        Schema::create('personaVehiculo', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("vehiculo");
            $table->unsignedInteger("puesto");
            $table->timestamps();
            $table->integer("estado")->default(1);
            $table->foreign('vehiculo')->references('id')->on('vehiculos');
            $table->foreign('puesto')->references('id')->on('puestos');
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
