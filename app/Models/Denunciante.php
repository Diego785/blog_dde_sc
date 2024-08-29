<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denunciante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'carnet',
        'direccion',
        'mantener_identidad_reserva',
        'correo_electronico',
        'telefono',
        'seguimiento',
    ];

    public function formularios()
    {
        return $this->hasMany(FormularioDenuncia::class, 'formulario_id');
    }
}
