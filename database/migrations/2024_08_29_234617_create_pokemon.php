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
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id('carta_id');
            $table->string('descricao');
            $table->string('tipo');
            $table->string('HP');
            $table->string('fraqueza');
            $table->string('resistencia');
            $table->timestamps();

            $table->foreign('carta_id')->references('id')->on('carta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_pokemon');
    }
};
