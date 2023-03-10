<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Asiento;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'edad',
        'sexo',
    ];

    public function profesor(){
        return $this->belongsTo(Profesor::class);
    }

    public function asiento(){
        return $this->hasOne(Asiento::class);
    }
}
