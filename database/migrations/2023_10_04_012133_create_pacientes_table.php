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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('edad');
            $table->string('sexo');
            $table->string('ocupacion');
            $table->string('antecedentes_medicos');
            $table->string('antecedentes_familiares');
            $table->string('signos_vitales');
            $table->string('examen_fisico');
            $table->string('motivo_consulta');
            $table->string('diagnostico_clasificado');
            $table->string('tratamiento');
            $table->string('diagnostico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
