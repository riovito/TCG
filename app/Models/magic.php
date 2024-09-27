<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class magic extends Model
{
    protected $table = 'magic';
    protected $fillable = ['nome', 'descricao'];
}
