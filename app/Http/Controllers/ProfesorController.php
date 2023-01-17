<?php

namespace App\Http\Controllers;
use App\Models\Profesor;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    //
    //
    public function alumnos(Request $request, $id){
        $alumno = Profesor::find($id)->alumno;
        return $alumno;
    }

}
