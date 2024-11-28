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
        Schema::create('proveedore', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_de_la_empresa');
            $table->string('tipo_proveedor');
            $table->string('ruc')->unique();
            $table->string('telefono');
            $table->string('email');
            $table->text('direccion');
            $table->string('cuenta_bancaria');
            $table->string('banco');
            $table->string('tipo_cuenta');
            $table->string('condiciones_pago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedore');
    }
};
