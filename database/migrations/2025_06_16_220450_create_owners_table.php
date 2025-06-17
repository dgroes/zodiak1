<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //Tabla de Propietarios
    public function up(): void
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id')->unique()->constrained('people')->onDelete('cascade');
            $table->string('phone')->nullable(); // Phone number of the owner
            $table->string('email')->nullable(); // Email address of the owner
            $table->string('address')->nullable(); // Address of the owner
            $table->string('photo')->nullable(); // URL or path to the owner's photo
            $table->string('notes')->nullable(); // Additional notes about the owner
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
