<?php

namespace App\Http\Controllers;
use App\Models\Alumno;
use App\Models\Extraescolar;
use Illuminate\Http\Request;

class MuchPorMuchController extends Controller
{
    public function index()
    {
        $alumno = Alumno::find(1);
        $extraescolar = Extraescolar::find(2);
        return view('welcome', compact('alumno', 'extraescolar'));
    }
}
