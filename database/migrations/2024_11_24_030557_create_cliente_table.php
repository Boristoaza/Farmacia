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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table ->string('nombre',100);
            $table ->string('apellido',100);
            $table ->string('cedula',20)->unique();
            $table ->string('telefono' , 20)->nullable();
            $table ->timestamp('fecha_de_registro')->useCurrent();
            $table ->text('direccion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};