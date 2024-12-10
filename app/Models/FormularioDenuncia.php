<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormularioDenuncia extends Model
{
    use HasFactory;

    protected $fillable = [
        'unidad_id',
        'denuncia_id',
        'denunciante_id',
        'relacion_hecho_denuncia_id',
        'tecnico_encargado_id',
        'estado_actual',
    ];

    public function unidad(){
        return $this->belongsTo(Unidad::class);
    }

    public function denunciante(){
        return $this->belongsTo(Denunciante::class, 'denunciante_id');
    }

    public function denuncia(){
        return $this->belongsTo(Denuncia::class, 'denuncia_id');
    }

    public function relacionHechoDenuncia(){
        return $this->belongsTo(RelacionHechoDenuncia::class,'relacion_hecho_denuncia_id');
    }

    public function tecnico(){
        return $this->belongsTo(Tecnico::class, 'tecnico_id');
    }

    public function anexosDenuncias()
    {
        return $this->hasMany(AnexoDenuncia::class, 'formulario_denuncia_id');
    }
}
