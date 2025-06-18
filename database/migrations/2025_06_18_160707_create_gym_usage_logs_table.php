<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Tabla de registros del uso del gimnasio por parte de los residentes 
    public function up(): void
    {
        Schema::create('gym_usage_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tower_id')
                ->constrained('towers')
                ->onDelete('cascade'); // Reference to the tower where the gym is located
            $table->foreignId('apartment_id')
                ->constrained('apartments')
                ->onDelete('cascade'); // Reference to the apartment of the resident using the gym
            $table->dateTime('start_time'); 
            $table->dateTime('end_time');
            $table->foreignId('work_session_id')
                ->constrained('work_sessions')
                ->onDelete('cascade'); // Reference to the work session of the concierge who logged the usage
            $table->string('notes')->nullable(); // Additional notes about the gym usage
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym_usage_logs');
    }
};
