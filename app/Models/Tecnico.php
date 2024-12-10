<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cargo',
    ]; 

    public function formularios()
    {
        return $this->hasMany(FormularioDenuncia::class, 'tecnico_id');
    }
}
