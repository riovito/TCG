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
        Schema::create('magic', function (Blueprint $table) {
            $table->id('carta_id');
            $table->string('descricao');
            $table->string('mana');
            $table->string('poder');
            $table->string('set');
            $table->timestamps();

            $table->foreign('carta_id')->references('id')->on('carta');
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
