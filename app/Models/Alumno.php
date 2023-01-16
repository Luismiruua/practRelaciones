<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    public function alumnos(){
        return $this->belongsTo(Tutor::class, 'id_tutor' );
    }

    public function extraescolares(){
        return $this->belongsToMany(Extraescolar::class, 'alumno_extraescolar');
    }
}
