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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("usuario_id");
            $table->unsignedBigInteger("curso_id");
            $table->timestamps();
            $table->foreign("usuario_id")->references("id")->on("usuarios");
            $table->foreign("curso_id")->references("id")->on("cursos");
        });
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("matricula_id");
            $table->date("fecha_de_asistencia");
            $table->string("asistencia");
            $table->timestamps();
            $table->foreign("matricula_id")->references("id")->on("matriculas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};