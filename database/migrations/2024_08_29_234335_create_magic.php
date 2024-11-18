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
            $table->id();
            $table->unsignedBigInteger('carta_id')->constrained('carta')->onDelete('cascade');
            $table->string('descricao');
            $table->string('mana');
            $table->string('poder');
            $table->string('set');
            $table->timestamps();

            $table->foreign('carta_id')->references('id')->on('carta');
        });
    }

/*     Schema::create('livros', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->text('resumo');
        $table->unsignedBigInteger('autor_id');
        $table->unsignedBigInteger('genero_id');
        $table->date('data_publicacao')->nullable();
        $table->string('ISBN')->nullable();
        $table->timestamps();

        $table->foreign('autor_id')->references('id')->on('autores');
        $table->foreign('genero_id')->references('id')->on('generos');
    }); */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('magic');
    }
};
