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
        Schema::create('portadas', function (Blueprint $table) {
            $table->id();
            $table->string('imagen_path');
            $table->text('url');
            $table->string('titulo')->nullable();
            $table->datetime('fecha_inicio')->nullable();
            $table->datetime('fecha_fin')->nullable();
            $table->boolean('esta_activo')->default(true);
            $table->string('orden')->default(0);
            $table->foreignId('unidad_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portadas');
    }
};
