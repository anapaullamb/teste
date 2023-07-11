<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriasFavorita extends Model
{
    use HasFactory;
    protected $fillable = ['jogador', 'categoria'];
}
