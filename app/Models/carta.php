<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carta extends Model {
    
    protected $table = 'carta';
    protected $fillable = ['nome', 'valor', 'PSA', 'raridade'];

    public function pokemon() {
        return $this->hasOne(Pokemon::class);
    }

    public function magic() {
        return $this->hasOne(Magic::class);
    }

    public function yugioh() {
        return $this->hasOne(YuGiOh::class);
    }

}
