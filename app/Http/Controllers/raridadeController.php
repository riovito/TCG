<?php

namespace App\Http\Controllers;
use App\Models\carta;
use App\Models\tipo;
use App\Models\raridade;
use App\Models\ataque;
use Illuminate\Http\Request;

class raridadeController extends Controller
{
    public function index()
    {
        $raridades = Raridade::all();
        return view('raridades.index', compact('raridades'));
    }

    public function create()
    {
        return view ('raridades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'chance' => 'required|string',
            'descricao' => 'required|string',
            'exclusividade' => 'required|string',
            'estrelas' => 'required|string',
        ]);

        Raridade::create($request->all());

        return redirect()->route('raridades.index')->with('Deu CERTO');
    }

    public function show($id)
    {
        $tipo = Tipo::findOrFail($id);
        return view('raridades.show', compact('raridade'));
    }

    public function edit($id)
    {
        $raridade = Raridade::findOrFail($id);
        return view('raridades.edit', compact('raridade'));
    }

    public function update(Request $request, $id)
    {

        $raridade = Raridade::findOrFail($id);

        $raridade->nome = $request->input('nome');
        $raridade->chance = $request->input('chance');
        $raridade->descricao = $request->input('descricao');
        $raridade->exclusividade = $request->input('exclusividade');
        $raridade->estrelas = $request->input('estrelas');

        $raridade->save();

        return redirect()->route('raridades.index');
    }

    public function destroy($id)
    {
        $raridade = Raridade::findOrFail($id);

        $raridade->delete();
        return redirect()->route('raridades.index');
    }
}
