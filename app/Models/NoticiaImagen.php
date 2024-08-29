<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticiaImagen extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'noticia_id',
    ];

    public function noticia()
    {
        return $this->belongsTo(Noticia::class, 'noticia_id');
    }
}
