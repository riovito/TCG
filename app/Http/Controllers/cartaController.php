<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carta;

class cartaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carta = Carta::all();
        return view('carta.index', compact('carta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('carta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carta = new Carta([
            'nome' => $request->input('nome'),
            'valor' => $request->input('valor'),
            'PSA' => $request->input('PSA'),
            'raridade' => $request->input('raridade')

        ]);

        $carta->save();

        return redirect()->route('carta.index');

/*         $request->validate([
            'nome' => 'required|string|max:255',
            'valor' => 'decimal|max:10',
            'PSA' => 'string|max:255',
            'raridade' => 'string|max255'
        ]);

        Carta::create($request->all());

        return redirect()->route('carta.index')->with('Deu CERTO'); */

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
 /*        $carta = Carta::findOrFail($id);
        return view('carta.show', compact('carta')); */
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $carta = Carta::findOrFail($id);
        return view('carta.edit', compact('carta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $carta = Carta::findOrFail($id);

        $carta->nome = $request->input('nome');
        $carta->nome = $request->input('valor');
        $carta->nome = $request->input('PSA');
        $carta->nome = $request->input('raridade');

        $carta->save();

        return redirect()->route('carta.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carta = Carta::findOrFail($id);

        $carta->delete();
        return redirect()->route('carta.index');
    }
}
