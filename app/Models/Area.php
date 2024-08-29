<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'nivel'
    ];

    public function bibliografias(){
        return $this->hasMany(Bibliografia::class, 'area_id');
    }
}
