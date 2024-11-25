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
        Schema::create('yugioh', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carta_id')->constrained('carta')->onDelete('cascade');
            $table->string('descricao');
            $table->string('tipo');
            $table->string('atributo');
            $table->string('nivel');
            $table->string('ataque');
            $table->timestamps();

            $table->foreign('carta_id')->references('id')->on('carta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yugioh');
    }
};
