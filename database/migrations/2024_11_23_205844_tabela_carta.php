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
        Schema::create('cartas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('ataque1');
            $table->unsignedBigInteger('ataque2');
            $table->string('hp');
            $table->string('preco');
            $table->unsignedBigInteger('tipo');
            $table->unsignedBigInteger('raridade');
            $table->timestamps();

            $table->foreign('ataque1')->references('id')->on('ataques');
            $table->foreign('ataque2')->references('id')->on('ataques');
            $table->foreign('tipo')->references('id')->on('tipos');
            $table->foreign('raridade')->references('id')->on('raridades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartas');

    }
};
