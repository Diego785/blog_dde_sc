<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'logo_path',
        'objetivo',
        'mision',
        'vision',
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

    public function subdireccionNoticias(){
        return $this->hasMany(SubdireccionNoticia::class, 'unidad_id');
    }
}
