<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable=[
        'nombre',
        'descripcion',
        'creditos',
        'tipo',
        'valor_hora',
        'estado'
    ];
    use HasFactory;
}
