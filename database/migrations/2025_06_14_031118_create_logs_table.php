<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Tabla de Bitacoras del puesto de consergería
    public function up(): void
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')
                ->constrained('staff')
                ->onDelete('cascade'); // Referencia al personal que registra la bitácora
            $table->string('entry'); // Entrada de la bitácora
            $table->foreignId('entryType_id')
                ->constrained('entry_types')
                ->onDelete('cascade'); // Referencia al tipo de entrada
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
