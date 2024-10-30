<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class magicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $magic = Magic::all();
        return view('magic.index', compact('magic'));
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
        $request->validate([
            'descricao' => 'required|string|max:255',
            'tipo' => 'string|max:255',
            'atributo' => 'string|max:255',
            'nivel' => 'string|max255',
            'ataque' => 'string|max255'
        ]);

        Carta::create($request->all());

        return redirect()->route('magic.index')->with('Deu CERTO');
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
