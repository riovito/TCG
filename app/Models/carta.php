<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
/*     protected $table = 'cartas';
    protected $fillable = ['nome','ataque1', 'ataque2', 'hp', 'preco', 'tipo', 'raridade']; */

    use HasFactory;

    protected $fillable = [
        'nome',
        'ataque1',
        'ataque2',
        'hp',
        'preco',
        'tipo',
        'raridade',
    ];

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }

    public function raridade()
    {
        return $this->belongsTo(Raridade::class);
    }

    public function ataque()
    {
        return $this->belongsTo(Ataque::class);
    }

    
}
