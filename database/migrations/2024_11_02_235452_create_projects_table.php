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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del proyecto
            $table->text('description'); // Descripción del problema que resuelve
            $table->decimal('funding_goal', 15, 2); // Objetivo de financiamiento
            $table->integer('duration'); // Duración estimada del proyecto (en días)
            $table->string('category'); // Categoría (ej. energía renovable, reciclaje)
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade'); // ID del emprendedor que creó el proyecto
            $table->enum('status',['pendiente','aprobado','rechazado'])->default('pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
