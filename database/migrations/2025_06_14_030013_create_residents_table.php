<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Tabla de Residentes de un depto
    public function up(): void
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_id')->unique();
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
            $table->foreignId('apartment_id')
                ->constrained('apartments')
                ->onDelete('cascade');
            $table->string('medical_disabilities')->nullable(); // Condificíon médica
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residents');
    }
};
