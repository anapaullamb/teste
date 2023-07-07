<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteHorario extends Model
{
    use HasFactory;
    protected $table = "clientes_horarios";
    protected $fillable = ['cliente','horario'];
}
