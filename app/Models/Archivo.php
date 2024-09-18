<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'observation_title',
        'bibliografia_id',
    ];

    public function bibliografia()
    {
        return $this->belongsTo(Bibliografia::class, 'bibliografia_id');
    }
}
