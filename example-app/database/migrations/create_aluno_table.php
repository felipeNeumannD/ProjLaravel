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
        Schema::create('aluno', function (Blueprint $table) {
            $table->id();
            $table->date('data_inicio');
            $table->string('forma_pagamento');
            $table->unsignedBigInteger('id_plano');
            $table->unsignedBigInteger('id_pessoa');
            $table->foreign('id_pessoa')->references('id')->on('pessoa')->onDelete('cascade');
            $table->foreign('id_plano')->references('id')->on('plano')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno');
    }
};
