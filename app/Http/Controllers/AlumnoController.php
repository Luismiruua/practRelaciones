<?php

namespace App\Http\Controllers;
use App\Models\Alumno;
use App\Models\Profesor;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    
    public function asiento(Request $request, $id){
        $asiento = Alumno::find($id)->asiento;
        return $asiento;
    }
    public function profesor(Request $request, $id){
        $profesor = Alumno::find($id)->profesor;
        return $profesor;
    }

}
