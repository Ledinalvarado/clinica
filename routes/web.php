<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\MedicosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/re', function () {

    return Inertia::render('Home');
//    return view('welcome');

});


Route::get('/',[EspecialidadController::class,'index'])->name('home');
Route::get('/actualizar',[EspecialidadController::class,'actualizar_server'])->name('home-actualizar');

Route::get('/medicos',[MedicosController::class,'index'])->name('medicos');
