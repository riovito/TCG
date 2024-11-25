<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yugioh extends Model
{
    protected $table = 'yugioh';
    protected $fillable = ['carta_id', 'descricao', 'tipo', 'atributo', 'nivel', 'ataque'];

    public function carta() {
        return $this->belongsTo(Carta::class);
    }
}
