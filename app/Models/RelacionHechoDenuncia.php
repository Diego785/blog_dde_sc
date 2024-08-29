<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelacionHechoDenuncia extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_hecho',
        'hora_hecho',
        'lugar_hecho',
        'descripcion_hecho',
        'fecha_denuncia',
        'hora_denuncia',
    ];

    public function formularios()
    {
        return $this->hasMany(FormularioDenuncia::class, 'formulario_id');
    }
}
