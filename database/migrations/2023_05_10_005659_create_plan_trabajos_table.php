<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plan_trabajos', function (Blueprint $table) {
            $table->id('plan_trabajo_id');
            $table->integer('cronograma_egresado_id');
            $table->integer('evaluacion_trabajos_id');
            $table->integer('egresado_id');
            $table->string('informe_plan_trabajo', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_trabajos');
    }
};
