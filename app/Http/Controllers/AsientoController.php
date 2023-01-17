<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asiento;

class AsientoController extends Controller
{
    //
    public function alumnos(Request $request, $id){
        $alumno = Asiento::find($id)->alumno;
        return $alumno;
    }
}
