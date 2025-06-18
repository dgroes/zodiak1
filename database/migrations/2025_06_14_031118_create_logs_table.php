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
     // Tabla de notas asociada al los acontecimientos del turno de trabajo
    //Ejemp: - Nota: Falla el ascensor Nº 2... / Nota: el resiente José Miguel del depto #1302 dice blah blah...
    public function up(): void
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('work_session_id')
                ->constrained('work_sessions')
                ->onDelete('cascade'); // Relaciona con la tabla de sesiones de trabajo
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
