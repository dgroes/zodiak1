<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Tabla de "horarios" (para gestionar horarios de personal)
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del horario
            $table->text('description')->nullable(); // Descripción del horario
            $table->time('start_time'); // Hora de inicio del horario
            $table->time('end_time'); // Hora de fin del horario
            $table->boolean('is_active')->default(true); // Indica si el horario está activo
            $table->integer('break_duration')->default(30); // Duración del descanso en minutos
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
