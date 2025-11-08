<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_Dependencia';
    protected $fillable = [
        'usuario_Depen',
        'sector_Depen',
        'telefono_Depen',
        'extension_Depen',
        'email_Depen',
        'calle_Depen',
        'numero_Depen',
        'colonia_Depen',
        'cp_Depen'
    ];

    // Relación uno a muchos
    public function formularios()
    {
        return $this->hasMany(Formulario::class, 'id_Dep');
    }
}
