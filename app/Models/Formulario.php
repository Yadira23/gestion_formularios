<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_Formulario';
    protected $fillable = [
        'titulo_Formulario',
        'descripcion_Form',
        'fechacreacion_Form',
        'botonaccion_Form',
        'secciones_Form',
        'periodo_Form',
        'id_Dep'
    ];

    // Relación inversa: pertenece a una dependencia
    public function dependencia()
    {
        return $this->belongsTo(Dependencia::class, 'id_Dep');
    }
}