<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //Tabla de quejas y sugerencias (para gestionar quejas y sugerencias de residentes)
    public function up(): void
    {
        Schema::create('complaints_suggestions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apartment_id')
                ->constrained('apartments')
                ->onDelete('cascade'); // Reference to the apartment of the resident making the complaint or suggestio
            $table->enum('type', ['complaint', 'suggestion']); // Type of entry: complaint or suggestion
            $table->text('content'); // Content of the complaint or suggestion
            $table->dateTime('date'); // Date of the complaint or suggestion
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints_suggestions');
    }
};
