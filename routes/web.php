<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EspecialidadController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
//    Route::resource('/especialidades', EspecialidadController::class)->except('update');

    Route::get('/especialidades/crear',[EspecialidadController::class,'create'])->name('create-especialidad');
    Route::get('/especialidades',[EspecialidadController::class,'index'])->name('especialidades');
    Route::get('/actualizar',[EspecialidadController::class,'actualizar_server'])->name('home-actualizar');
    Route::post('/especialidades/store',[EspecialidadController::class,'store'])->name('especialidades.store');
//
    Route::get('/medicos',[MedicosController::class,'index'])->name('medicos');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
