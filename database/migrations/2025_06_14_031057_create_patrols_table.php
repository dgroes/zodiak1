<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Tabla de "rondas" (Verificaion de Dependencias del edificio)
    public function up(): void
    {
        Schema::create('patrols', function (Blueprint $table) {
            $table->id();
            $table->foreignId('work_session_id')
                ->constrained('work_sessions')
                ->onDelete('cascade'); // Relaciona con la tabla de sesiones de trabajo
            $table->string('details');
            $table->dateTime('start_time'); // Hora de inicio de la ronda
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patrols');
    }
};
