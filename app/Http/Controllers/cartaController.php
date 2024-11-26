<?php

namespace App\Http\Controllers;
use App\Models\carta;
use App\Models\tipo;
use App\Models\raridade;
use App\Models\ataque;
use Illuminate\Http\Request;

class cartaController extends Controller
{
    public function index()
    {
        
        $cartas = Carta::with(['raridade', 'tipo'])->get();
        return view('cartas.index', compact('cartas'));
    }

    public function create()
    {
        $ataques = Ataque::all(); 
        $raridades = Raridade::all();
        $tipos = Tipo::all();
    
        return view('cartas.create', compact('ataques', 'raridades', 'tipos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'ataque1' => 'required|exists:ataques,id',
            'ataque2' => 'required|exists:ataques,id',
            'hp' => 'required|string',
            'preco' => 'required|string',
            'tipo' => 'required|exists:tipos,id',
            'raridade' => 'required|exists:raridades,id',
        ]);

        Carta::create($request->all());

        return redirect()->route('cartas.index')->with('success', 'Carta criada com sucesso!');
    }

    public function show($id)
    {
        $carta = Carta::with(['ataque', 'raridade', 'tipo'])->findOrFail($id);
        return view('cartas.show', compact('carta'));
    }

    public function edit($id)
    {
        $carta = Carta::findOrFail($id);
        $ataques = Ataque::all();
        $raridades = Raridade::all();
        $tipos = Tipo::all();
    
        return view('cartas.edit', compact('carta', 'ataques', 'raridades', 'tipos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string',
            'ataque1' => 'required|exists:ataques,id',
            'ataque2' => 'required|exists:ataques,id',
            'hp' => 'required|string',
            'preco' => 'required|string',
            'tipo' => 'required|exists:tipos,id',
            'raridade' => 'required|exists:raridades,id',
        ]);

        $carta = Carta::findOrFail($id);
        $carta->update($request->all());

        return redirect()->route('cartas.index')->with('success', 'Carta atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $carta = Carta::findOrFail($id);
        $carta->delete();

        return redirect()->route('cartas.index')->with('success', 'Carta removida com sucesso!');
    }
}
