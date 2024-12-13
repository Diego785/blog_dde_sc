<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;


class Actividad extends Model
{
    use HasFactory;

    protected $fillable = [
        'imagen_path',
        'url',
        'description',
        'unidad_id',
    ];

    protected function imagen():Attribute
    {
        return Attribute::make(
            get: fn()=>Storage::url($this->imagen_path),
        );
    }
}
