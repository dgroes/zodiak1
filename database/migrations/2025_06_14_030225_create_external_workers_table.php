<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Trabajadores externos (Personal de limpieza, Enfermera, Kinesiologo, etc.)
    public function up(): void
    {
        Schema::create('external_workers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_id')->unique();
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
            $table->foreignId('apartament_id')
                ->constrained('apartments')
                ->onDelete('cascade'); // Relaciona con el departamento al que pertenece el trabajador externo
            $table->string('job_title'); // Título del trabajo (Ej: Limpiador, Enfermera, Kinesiólogo, etc.)
            $table->date('start_date')->nullable(); // Fecha de inicio del trabajo (comenzó a trabajar)
            $table->date('end_date')->nullable(); // Fecha de fin del trabajo (terminó de trabajar (despedido))
            $table->softDeletes(); /* C04: Soft Delete */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('external_workers');
    }
};
