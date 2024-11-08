<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    protected $table = 'carta';
    protected $fillable = ['nome', 'valor', 'PSA', 'raridade'];
}
