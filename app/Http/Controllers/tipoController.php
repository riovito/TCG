<?php

namespace App\Http\Controllers;
use App\Models\carta;
use App\Models\tipo;
use App\Models\raridade;
use App\Models\ataque;
use Illuminate\Http\Request;

class tipoController extends Controller
{
    public function index()
    {
        $tipos = Tipo::all();
        return view('tipos.index', compact('tipos'));
    }

    public function create()
    {
        return view ('tipos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'descricao' => 'required|string',
            'fraqueza' => 'required|string',
            'resistencia' => 'required|string',
            'cor' => 'required|string',
            'efetivo' => 'required|string',
        ]);

        Tipo::create($request->all());

        return redirect()->route('tipos.index')->with('Deu CERTO');
    }

    public function show($id)
    {
        $tipo = Tipo::findOrFail($id);
        return view('tipos.show', compact('tipo'));
    }


    public function edit($id)
    {
        $tipo = Tipo::findOrFail($id);
        return view('tipos.edit', compact('tipo'));
    }

    public function update(Request $request, $id)
    {

        $tipo = Tipo::findOrFail($id);

        $tipo->nome = $request->input('nome');
        $tipo->descricao = $request->input('descricao');
        $tipo->descricao = $request->input('fraqueza');
        $tipo->descricao = $request->input('resistencia');
        $tipo->descricao = $request->input('cor');
        $tipo->descricao = $request->input('efetivo');

        $tipo->save();

        return redirect()->route('tipos.index');
    }

    public function destroy($id)
    {
        $tipo = Tipo::findOrFail($id);

        $tipo->delete();
        return redirect()->route('tipos.index');
    }
}
