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
        Schema::create('denunciantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('carnet');
            $table->string('direccion');
            $table->boolean('mantener_identidad_reserva');
            $table->string('correo_electronico');
            $table->string('telefono');
            $table->boolean('seguimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denunciantes');
    }
};
