<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Añadir más columnas a la tabla de usuarios
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //Añadir columnas despues de la columna 'id()'
            $table->foreignId('staff_id')
                ->nullable()
                ->constrained('staff')
                ->onDelete('set null'); // Referencia al p ersonal asociado al usuario

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
