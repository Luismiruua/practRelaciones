<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alumno;

class Asiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_alumno',
        'sitio'
    ];

    public function alumno(){
        return $this->belongsTo(Alumno::class);
    }
}
