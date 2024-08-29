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
        Schema::create('relacion_hecho_denuncias', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_hecho');
            $table->time('hora_hecho');
            $table->string('lugar_hecho');
            $table->text('descripcion_hecho');
            $table->date('fecha_denuncia');
            $table->time('hora_denuncia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relacion_hecho_denuncias');
    }
};
