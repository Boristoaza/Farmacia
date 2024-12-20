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
        Schema::create('registroclientes', function (Blueprint $table) {
            $table->id();
            $table->string('ruc');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo');
            $table->integer('telefono');
            $table->string('direccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registroclientes');
    }
};
