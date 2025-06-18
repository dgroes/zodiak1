<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Table de bodega de un depto
    public function up(): void
    {
        Schema::create('apartment_vaults', function (Blueprint $table) {
            $table->id();
            $table->enum('floor', ['-1', '-2']);
            $table->foreignId('apartment_id')
                ->constrained('apartments')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartment_vaults');
    }
};
