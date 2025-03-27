<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paises = Pais::all();
        return view('pais.index', ['paises'=>$paises]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pais.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pais_codi' => 'required|string|size:3|unique:tb_pais,pais_codi',
            'pais_nomb' => 'required|string|max:52',
            'pais_capi' => 'required|integer',
        ]);

        Pais::create([
            'pais_codi' => $request->pais_codi,
            'pais_nomb' => $request->pais_nomb,
            'pais_capi' => $request->pais_capi,
        ]);

        return redirect()->route('pais.index')->with('success', 'País agregado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
