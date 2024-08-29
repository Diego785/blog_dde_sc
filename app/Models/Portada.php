<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Portada extends Model
{
    use HasFactory;

    protected $fillable = [
        'imagen_path',
        'titulo',
        'fecha_inicio',
        'fecha_fin',
        'esta_activo',
        'orden',
        'unidad_id',
    ];

    protected $casts = [
        'fecha_inicio' => 'datetime',
        'fecha_fin' => 'datetime',
        'esta_activo' => 'boolean',
    ];

    protected function imagen():Attribute
    {
        return Attribute::make(
            get: fn()=>Storage::url($this->imagen_path),
        );
    }

}
