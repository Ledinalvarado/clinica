<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$datos=Especialidad::all();
        $datos=Especialidad::all();
        $registros_nuevos=Especialidad::withoutTrashed();
        //dd($datos);

//        echo 'texto';
//        dd($datos);
//        return Inertia::render('Home',[
        return Inertia::render('Especialidades/Index',[
           'registros'=>$datos,
            'registros_nuevos'=>$registros_nuevos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Especialidad $especialidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Especialidad $especialidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Especialidad $especialidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Especialidad $especialidad)
    {
        //
    }

    public function actualizar_server(Especialidad $especialidad){

    }
}
