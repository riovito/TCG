<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raridade extends Model
{
    protected $table = 'raridades';
    protected $fillable = ['nome','chance', 'descricao', 'exclusividade', 'estrelas'];
}
