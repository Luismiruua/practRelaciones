<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AsientoController;
use App\Http\Controllers\ProfesorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/alumnos/{id}/asiento',[AlumnoController::class,'asiento']);
Route::get('/asiento/{id}/alumnos',[AsientoController::class,'alumnos']);
Route::get('/profesor/{id}/alumnos',[ProfesorController::class,'alumnos']);
Route::get('/alumnos/{id}/profesor',[AlumnoController::class,'profesor']);


