<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;
use Illuminate\View\View;
Use Illuminate\Support\Facades\DB;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Materia=DB::table('Materia')->get();
        return view('Materia.index',['Materia'=> $Materia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(String $id)
    {
        $Mat = Materia::Find($id);
        return view('Materia.edit', compact('Mat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $Materia)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'creditos' => 'required|integer',
            'tipo' => 'required',
            'valor_hora' => 'required|numeric',
            'estado' => 'required',
        ]);

        $Materia = Materia::findOrFail($id);
        $Materia->update($request->all());

        return redirect()->route('Materia.index')->with('success', 'Materia actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $Materia)
    {
        $Materia = Materia::findOrFail($id);
        $Materia->delete();

        return redirect()->route('Materia.index')->with('success', 'Materia eliminada con éxito');
    }
}
