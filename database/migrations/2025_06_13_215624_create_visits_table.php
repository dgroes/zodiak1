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
        //Tabla de visitas a los deptos
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('person_id'); // ID of the person visiting
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
            $table->unsignedBigInteger('apartment_id'); // ID of the apartment being visited
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');
            $table->dateTime('entry_time'); // Date and time of entry
            $table->dateTime('exit_time')->nullable(); // Date and time of exit, nullable if not yet exited
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
