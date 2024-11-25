<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carta;
use App\Models\magic;
use App\Models\pokemon;
use App\Models\yugioh;


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
        return view ('carta.basic');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeBasic(Request $request)
    {

        $request->validate([
            'nome' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'PSA' => 'nullable|string|max:10',
            'raridade' => 'required|string|max:50',
            'tipo' => 'required|string|max:50',
        ]);
        

        // Criação da carta
        $carta = new Carta();
        $carta->nome = $request->input('nome');
        $carta->valor = $request->input('valor');
        $carta->PSA = $request->input('PSA');
        $carta->raridade = $request->input('raridade');
        $carta->tipo = $request->input('tipo');
        $carta->save();  // Salva a carta na tabela "carta"

        session(['carta_basica' => $carta->id]);

        return view('carta.type', ['tipo' => $carta->tipo]);

        return redirect()->route('carta.type')->with('tipo', $request->input('tipo'));
    }


public function storeType(Request $request)
{
    $carta = Carta::find(session('carta_basica'));

    if (!$carta) {
        return redirect()->route('carta.index')->with('error', 'Carta não encontrada!');
    }

    // Validate the type-specific fields
    $request->validate([
        'tipo' => 'required|string',
    ]);

    // Process type-specific data based on the selected type
    if ($request->tipo === 'pokemon') {
        // For Pokémon-specific data
        $carta->descricao = $request->input('descricao');
        $carta->hp = $request->input('hp');
        $carta->fraqueza = $request->input('fraqueza');
        $carta->resistencia = $request->input('resistencia');
    } elseif ($request->tipo === 'magic') {
        // For Magic-specific data
        $carta->descricao = $request->input('descricao');
        $carta->mana = $request->input('mana');
        $carta->poder = $request->input('poder');
        $carta->set = $request->input('set');
    } elseif ($request->tipo === 'yugioh') {
        // For Yu-Gi-Oh! specific data
        $carta->descricao = $request->input('descricao');
        $carta->atributo = $request->input('atributo');
        $carta->nivel = $request->input('nivel');
        $carta->ataque = $request->input('ataque');
    }

    // Save the type-specific data to the database
    $carta->tipo = $request->tipo; // Save the card type
    $carta->save();

    // Redirect to the 'carta.index' or a success page
    return redirect()->route('carta.index')->with('success', 'Carta criada com sucesso!');
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
        $carta->valor = $request->input('valor');
        $carta->PSA = $request->input('PSA');
        $carta->raridade = $request->input('raridade');

        $carta->save();

        return redirect()->route('carta.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carta = carta::findOrFail($id);

        $carta->delete();
        return redirect()->route('carta.index');
    }

    public function type()
    {
        return view('carta.type');
    }

}
