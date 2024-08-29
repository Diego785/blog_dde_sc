<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cargo',
        'perfil_path',
        'email',
        'logo_path',
        'unidad_id',
    ];

    //Relacion uno a muchos inversa
    public function unidad()
    {
        return $this->belongsTo(Unidad::class);
    }
}
