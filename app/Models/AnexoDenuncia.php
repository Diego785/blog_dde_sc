<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnexoDenuncia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'path',
        'formulario_denuncia_id',
    ];

    public function formulariosDenuncias()
    {
        return $this->belongsTo(FormularioDenuncia::class, 'formulario_denuncia_id');
    }
}
