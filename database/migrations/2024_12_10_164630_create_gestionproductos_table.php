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
        Schema::create('gestionproductos', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo');
            $table->string('nombreproducto');
            $table->string('descripcion');
            $table->integer('precio');
            $table->integer('stock');
            $table->string('opciones');
            $table->date('creacion');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestionproductos');
    }
};
