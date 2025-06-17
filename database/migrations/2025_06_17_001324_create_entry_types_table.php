<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Tabla de Tipos de Entrada (para bitácoras)
    public function up(): void
    {
        Schema::create('entry_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Nombre del tipo de entrada
            $table->string('description')->nullable(); // Descripción del tipo de entrada
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entry_types');
    }
};
