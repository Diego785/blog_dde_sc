<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valor extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'unidad_id',
    ];

    public function unidad(){
        return $this->belongsTo(Unidad::class);
    }
}
