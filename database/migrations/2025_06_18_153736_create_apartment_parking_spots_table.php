<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Tabla de estacionamientos de un departamento
    public function up(): void
    {
        Schema::create('apartment_parking_spots', function (Blueprint $table) {
            $table->id();
            $table->enum('floor', ['-1', '-2']); // Floor of the parking space
            $table->foreignId('apartment_id')
                ->constrained('apartments')
                ->onDelete('cascade'); // Reference to the apartment this parking space belongs to
            $table->string('parking_number'); // Unique identifier for the parking space
            $table->string('notes')->nullable(); // Additional notes about the parking space
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartment_parking_spots');
    }
};
