<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pacientes extends Model
{
    protected $fillable = [
        'name', 
        'edad', 
        'sexo',
        'ocupacion',
        'antecedentes_medicos',
        'antecedentes_familiares',
        'signos_vitales',
        'examen_fisico',
        'motivo_consulta',
        'diagnostico_clasificado',
        'tratamiento',
        'diagnostico',
    ]; 
    use HasFactory;
}
