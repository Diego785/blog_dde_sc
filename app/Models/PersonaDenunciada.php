<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaDenunciada extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cargo',
        'cantidad_denuncias',
        'denuncia_id',
    ];

    public function denuncia(){
        return $this->belongsTo(Denuncia::class, 'denuncia_id');
    }
}
