<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha',
        'hora',
        'portada_path',
        'unidad_id',
    ];

    public function images()
    {
        return $this->hasMany(NoticiaImagen::class, 'noticia_id');
    }

 
    
}
