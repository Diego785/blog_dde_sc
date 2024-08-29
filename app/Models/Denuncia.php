<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    use HasFactory;

    protected $fillable = [
        'direccion_general',
        'unidad_educativa',
        'distrito',
        'zona',
        'barrio',
        'referencia',
    ];

    public function personasDenunciadas(){
        return $this->hasMany(PersonaDenunciada::class, 'denuncia_id');
    }

    public function formularioDenuncia(){
        return $this->hasOne(FormularioDenuncia::class, 'denuncia_id');
    }
}
