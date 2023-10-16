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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('cpf', 11)->comment("CPF do usuário");
            $table->string('nome', 60)->comment("Nome do usuário");
            $table->string('sobrenome', 255)->comment("Descrição do curso");
            $table->date('data_nascimento')->comment("Data de nascimento do usuário");
            $table->string('email', 255)->comment("Email do usuário");
            $table->string('genero', 1)->comment("Genero do usuário");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
