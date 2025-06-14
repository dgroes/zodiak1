<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('person_id'); // ID of the person owning the vehicle
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
            $table->string('license_plate')->unique(); // Unique license plate number
            $table->string('brand'); // Vehicle brand
            $table->string('model')->nullable(); // Vehicle model
            $table->string('color')->nullable(); // Vehicle color
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
