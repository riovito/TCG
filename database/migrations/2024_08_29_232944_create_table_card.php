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
        Schema::create('carta', function (Blueprint $table) {
            $table->id('id');
            $table->string('nome');
            $table->decimal('valor');
            $table->string('PSA');
            $table->string('raridade');
            $table->string('tipo');
/*             $table->string('tipo');
            $table->foreign('tipo')->references('tipo')->on('pokemon')->onDelete('cascade'); */
            $table->timestamps();
        });
    }

/*     Tabela CARTAS
        id 
        nome
        valor
        FK - TIPO
        FK - RARIDADE

    tabela tipos 
        POKEMON
        MAGIC
        Yugi-ho

    tabela raridade
        BAIXA
        ALTA 
        MEDIA
 */


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carta');
    }
};
