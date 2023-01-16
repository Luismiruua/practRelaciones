<?php

namespace App\Http\Controllers;
use App\Models\Alumno;
use App\Models\Tutor;
use Illuminate\Http\Request;

class UnoMuchController extends Controller
{
    public function index(){
        $alumnos = Alumno::all();
        return view('welcome', compact('alumnos'));
    }
}
