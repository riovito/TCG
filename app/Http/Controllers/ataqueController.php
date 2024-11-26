<?php

namespace App\Http\Controllers;
use App\Models\carta;
use App\Models\tipo;
use App\Models\raridade;
use App\Models\ataque;
use Illuminate\Http\Request;

class ataqueController extends Controller
{
    public function index()
    {
        $ataques = Ataque::all();
        return view('ataques.index', compact('ataques'));
    }

    public function create()
    {
        return view ('ataques.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'tipo' => 'required|string',
            'descricao' => 'required|string',
            'energia' => 'required|string',
            'dano' => 'required|string',
        ]);

        Ataque::create($request->all());

        return redirect()->route('ataques.index')->with('Deu CERTO');
    }

    public function show($id)
    {
        $ataque = Ataque::findOrFail($id);
        return view('ataques.show', compact('ataque'));
    }

    public function edit($id)
    {
        $ataque = Ataque::findOrFail($id);
        return view('ataques.edit', compact('ataque'));
    }

    public function update(Request $request, $id)
    {

        $ataque = Raridade::findOrFail($id);

        $ataque->nome = $request->input('nome');
        $ataque->tipo = $request->input('tipo');
        $ataque->descricao = $request->input('descricao');
        $ataque->energia = $request->input('energia');
        $ataque->dano = $request->input('dano');

        $ataque->save();

        return redirect()->route('ataques.index');
    }

    public function destroy($id)
    {
        $ataque = Ataque::findOrFail($id);

        $ataque->delete();
        return redirect()->route('ataques.index');
    }
}
