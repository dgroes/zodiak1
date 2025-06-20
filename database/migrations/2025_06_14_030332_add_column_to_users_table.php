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
        // Verifica si la columna ya existe antes de agregarla
        if (!Schema::hasColumn('users', 'staff_id')) {
            Schema::table('users', function (Blueprint $table) {
                $table->foreignId('staff_id')
                    ->nullable()
                    ->constrained('staff')
                    ->onDelete('set null');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['staff_id']);
            $table->dropColumn('staff_id');
        });
    }
};
