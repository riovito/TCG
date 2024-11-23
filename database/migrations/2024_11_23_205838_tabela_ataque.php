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
        Schema::create('ataques', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tipo');  //normal, habilidade
            $table->string('descricao');
            $table->string('energia');
            $table->string('dano');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ataques');
    }
};
