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
        //Conserje, Auxiliar, Administrador, etc.
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('run')->unique()->nullable(); // RUN chileno (Rol Único Nacional)
            $table->string('document_number')->unique()->nullable(); // En caso que no tenga RUN chileno
            $table->string('names');
            $table->string('last_names');
            $table->enum('role', ['Conserje', 'Auxiliar', 'Administrador']);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('phone');
            // $table->string('email')->nullable();
            $table->string('address');
            $table->string('photo')->nullable(); // URL or path to the photo
            $table->string('notes')->nullable(); // Additional notes about the staff member
            $table->boolean('active')->default(true); // Indicates if the staff member is currently active
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffs');
    }
};
