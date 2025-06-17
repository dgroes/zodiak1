<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    //Tabla de Apartamentos (deptos)
    /* C03: Tablas Pivote */
    public function up(): void
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            //Ide del propietario
            $table->foreignId('owner_id')->constrained('users')->onDelete('cascade');
            //Id del edificio
            $table->foreignId('tower_id')->constrained('towers')->onDelete('cascade');
            $table->integer('number')->unique();
            $table->string('details')->nullable(); // Detalles del apartamento (ej. "3 habitaciones, 2 baños")
            $table->boolean('is_available')->default(true); // Indica si el apartamento está disponible para alquilar o vender
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
