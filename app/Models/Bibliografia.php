<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bibliografia extends Model
{
    use HasFactory;

    protected $fillable = [
        'archivo_path',
        'portada_path',
        'descripcion',
        'tipo_id',
        'area_id',
    ];

    public function area(){
        return $this->belongsTo(Area::class, 'area_id');
    }

    public function tipo(){
        return $this->belongsTo(Tipo::class, 'tipo_id');
    }

    public function archivos()
    {
        return $this->hasMany(Archivo::class, 'bibliografia_id');
    }
}
