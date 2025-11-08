<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespuestaTurismo extends Model
{
    protected $table = 'respuestas_turismo';

    protected $fillable = [
        'region',
        'cantidad_turistas'
    ];
}

