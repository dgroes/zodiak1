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
        Schema::create('mailboxes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apartament_id')->constrained('apartaments')->onDelete('cascade');
            $table->text('content')->nullable(); // Contenido del buzón, puede ser texto o HTML
            $table->timestamps();
            // Agregar un índice para mejorar la búsqueda por apartamento
            $table->index('apartament_id');
            // Agregar un índice para mejorar la búsqueda por contenido
            $table->index('content');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mailboxes');
    }
};
