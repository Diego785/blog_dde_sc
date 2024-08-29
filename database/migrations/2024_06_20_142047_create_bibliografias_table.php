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
        Schema::create('bibliografias', function (Blueprint $table) {
            $table->id();
            $table->text('portada_path');
            $table->text('descripcion');
            $table->foreignId('tipo_id')->constrained();
            $table->foreignId('area_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bibliografias');
    }
};
