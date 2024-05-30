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
        Schema::create('logs_solicituds', function (Blueprint $table) {
            $table->id();
            $table->integer('id_solicitud');
            $table->integer('document_id');
            $table->integer('estatus');
            $table->dateTime('fecha_creacion');
            $table->dateTime('fecha_ultima_actualizacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs_solicituds');
    }
};
