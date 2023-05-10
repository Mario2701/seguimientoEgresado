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
        Schema::create('acta_egresados', function (Blueprint $table) {
            $table->id('acta_egresado_id');
            $table->integer('reunion_id');
            $table->integer('junta_directiva_egresado_id');
            $table->integer('egresado_id');

            $table->string('resultado_acta_egresado', 255);
            $table->string('firma_responsable_acta_egresado', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acta_egresados');
    }
};
