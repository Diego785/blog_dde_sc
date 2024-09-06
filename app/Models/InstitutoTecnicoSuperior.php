<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutoTecnicoSuperior extends Model
{
    use HasFactory;

    protected $fillable = [
        'dpto',
        'nombre',
        'provincia',
        'municipio',
        'dependencia',
        'creacion',
        'img_path',
        // 'enlace',
    ];

}
