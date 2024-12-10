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
        Schema::create('formulario_denuncias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unidad_id')->constrained();
            $table->foreignId('denuncia_id')->constrained();
            $table->foreignId('denunciante_id')->nullable()->constrained();
            $table->foreignId('relacion_hecho_denuncia_id')->constrained();
            $table->foreignId('tecnico_id')->nullable()->constrained();
            $table->string('estado_actual')->nullable();
            $table->unsignedSmallInteger('es_valido')->nullable()->default(4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulario_denuncias');
    }
};
