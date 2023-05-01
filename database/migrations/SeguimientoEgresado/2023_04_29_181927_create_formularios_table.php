<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->string('lugarTrabajo', 255);
            $table->string('cargo',50);
            $table->decimal('sueldo');
            $table->string('estadoCivil', 15);
            $table->string('nivelAcademico', 15);
            $table->string('telefono',15);
            $table->integer('Egresado_idEgresado');

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
        Schema::dropIfExists('formularios');
    }
}
