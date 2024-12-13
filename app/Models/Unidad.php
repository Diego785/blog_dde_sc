<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'jefe',
        'cargo',
        'objetivo',
        'mision',
        'vision',
        'logo_path',
        'jefe_perfil_path',
    ];

    //Relacion uno a muchos
    public function personals()
    {
        return $this->hasMany(Personal::class);
    }
    public function valores()
    {
        return $this->hasMany(Valor::class);
    }

   
}
