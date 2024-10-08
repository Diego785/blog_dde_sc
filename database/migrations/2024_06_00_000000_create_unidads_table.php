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
        Schema::create('unidads', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('jefe')->nullable();
            $table->string('cargo')->nullable();
            $table->text('objetivo')->nullable();
            $table->text('mision')->nullable();
            $table->text('vision')->nullable();
            $table->string('logo_path')->nullable();
            $table->string('perfil_jefe_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidads');
    }
};
