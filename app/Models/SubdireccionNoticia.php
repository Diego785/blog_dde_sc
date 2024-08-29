<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubdireccionNoticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'unidad_id',
        'noticia_id',
    ];

    public function noticia(){
        return $this->belongsTo(Noticia::class, 'noticia_id');
    }

    public function unidad(){
        return $this->belongsTo(Unidad::class, 'noticia_id');
    }
}
