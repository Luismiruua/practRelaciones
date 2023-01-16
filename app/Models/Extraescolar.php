<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extraescolar extends Model
{
    use HasFactory;
    public function alumnos(){
        return $this->belongsToMany(Alumno::class, 'alumno_extraescolar');
    }
}
