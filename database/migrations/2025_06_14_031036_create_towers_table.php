<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Tabla de Torres (Torre: Sur, Torre: Norte, Torre Roja, Torre Verde, etc.)
    public function up(): void
    {
        Schema::create('towers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Nombre de la torre
            $table->string('address');
            //Lider vecinal de la torre (tiene que ser un resdnte de la torre (resident_table)):
            $table->foreignId('leader_id')->nullable()->constrained('residents')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('towers');
    }
};
