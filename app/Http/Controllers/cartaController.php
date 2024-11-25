<?php

namespace App\Http\Controllers;
use App\Models\carta;
use App\Models\tipo;
use App\Models\raridade;
use App\Models\ataque;
use Illuminate\Http\Request;

class cartaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartas = Carta::with(['tipo', 'raridade', 'ataque'])->get();
        return view('cartas.index', compact('cartas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos = Tipo::all(); 
        $raridades = Raridade::all();
        $ataques = Ataque::all();
    
        return view('cartas.create', compact('tipos', 'raridades', 'ataques'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        
        $request->validate([
            'nome' => 'required|string',
            'ataque1' => 'required|string|exists:ataques,id',
            'ataque2' => 'required|string|exists:ataques,id',
            'hp' => 'required|string',
            'preco' => 'required|string',
            'tipo' => 'required|exists:tipos,id',
            'raridade' => 'required|exists:raridades,id',
        ]);

        Carta::create($request->all());

        return redirect()->route('cartas.index')->with('success', 'Carta criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $carta = Carta::with(['tipo', 'raridade', 'ataque'])->findOrFail($id);
        return view('cartas.show', compact('carta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $carta = Carta::findOrFail($id);
        $tipo = Tipo::all();
        $raridade = Raridade::all();
        $ataque = Ataque::all();
    
        return view('cartas.edit', compact('carta', 'tipos', 'raridades', 'ataques'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required|string',
            'ataque1' => 'required|string',
            'ataque2' => 'required|string',
            'hp' => 'required|string',
            'preco' => 'required|string',
            'tipo' => 'required|exists:tipos,id',
            'raridade' => 'required|exists:raridades,id',
        ]);

        $carta = Carta::findOrFail($id);
        $carta->update($request->all());

        return redirect()->route('cartas.index')->with('success', 'Carta atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carta = Carta::findOrFail($id);
        $carta->delete();

        return redirect()->route('cartas.index')->with('success', 'Carta removida com sucesso!');
    }
}