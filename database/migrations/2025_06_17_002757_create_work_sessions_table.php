<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Tabla de "sesiones de trabajo" (para gestionar sesiones de trabajo del personal)
    public function up(): void
    {
        Schema::create('work_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')
                ->constrained('staff')
                ->onDelete('cascade'); // Referencia al personal que realiza la sesión de trabajo
            $table->foreignId('schedule_id')
                ->constrained('schedules')
                ->onDelete('cascade'); // Referencia al horario asociado a la sesión de trabajo
            $table->foreignId('tower_id')
                ->constrained('towers')
                ->onDelete('cascade'); // Relaciona con la torre del edificio
            $table->dateTime('start_time'); // Hora de inicio de la sesión de trabajo
            $table->dateTime('end_time')->nullable(); // Hora de fin de la sesión de trabajo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_sessions');
    }
};
