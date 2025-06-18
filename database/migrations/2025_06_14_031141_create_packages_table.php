<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //Tabla de paquetes que llegan a conserjería para los departamentos 
    // o que deptos dejan paquetes para un retiro externo por personas no habitantes de las torres
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apartment_id')
                ->constrained('apartments')
                ->onDelete('cascade'); // Reference to the apartment this package belongs to
            // Nombre de la persona para la cual es el paquete
            $table->string('recipient_name'); // <-- Nombre del destinatario
            $table->string('sender_company'); // <-- Nombre de la empresa que envió el paquete
            $table->dateTime('received_at'); // Fecha y hora en que se recibió el paquete
            $table->enum('status', ['pendiente', 'recibido', 'devuelto']) // Estado del paquete
                ->default('pending'); // Estado por defecto es 'pending'
            $table->string('description')->nullable(); // Descripción del paquete

            //Id de la sesión de trabajo del conserje que recibió el paquete
            $table->foreignId('work_session_id')
                ->constrained('work_sessions')
                ->onDelete('cascade'); // Relaciona con la sesión de trabajo del conserje que recibió el paquete
            $table->dateTime('picked_up_at')->nullable(); // Fecha y hora en que se retiró el paquete, si aplica
            $table->string('pickup_person_name')->nullable(); // Nombre de la persona que retira el paquete, (para retiros externos por personas no habitantes de las torres)
            $table->string('run_pickup_person')->nullable(); // RUN de la persona que retira el paquete, (para retiros externos por personas no habitantes de las torres)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
