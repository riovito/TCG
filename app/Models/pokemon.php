<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pokemon extends Model
{
    protected $table = 'pokemon';
    protected $fillable = ['descricao', 'tipo', 'HP', 'fraqueza', 'resistencia'];
}
