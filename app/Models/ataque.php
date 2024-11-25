<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ataque extends Model
{
    protected $table = 'ataques';
    protected $fillable = ['nome','tipo', 'descricao', 'energia', 'dano'];
}
