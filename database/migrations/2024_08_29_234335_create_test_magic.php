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
        Schema::create('test_magic', function (Blueprint $table) {
            $table->id('card_id');
            $table->string('Descricao');
            $table->string('Mana');
            $table->string('Poder');
            $table->string('Set');
            $table->timestamps();

            $table->foreign('card_id')->references('id')->on('test_card');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_magic');
    }
};
