<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    
    public $table = 'profesores';
    protected $fillable = [
        'nombre',
        'edad',
        'sexo',
        'asignatura',
    ];
    
    public function alumnos(){
        return $this->hasMany(Alumno::class);
    }

}
