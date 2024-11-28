<x-app-layout>
    <h1 class="text-danger display-3 ml-3">Cartas</h1>
    <div style="max-width: 1450px;">
        <table class="table table-striped-columns table-dark table-bordered border-gray m-3">
            <thead>
                <tr>
                    <th style="width: 3%">#</th>
                    <th style="width: 10%">Nome</th>
                    <th style="width: 10%;">Ataque 1</th>
                    <th style="width: 10%">Ataque 2</th>
                    <th style="width: 5%">HP</th>
                    <th style="width: 10%">Preço</th>
                    <th style="width: 10%">Tipo</th>
                    <th style="width: 10%">Raridade</th>
                    <th style="width: 10%"></th>
                </tr>

            </thead>
            

            <tbody class="table-group-divider">
                @foreach ($cartas as $carta)
                    <tr>
                        <td class="colunas">{{ $carta->id }}</td>
                        <td id="nome">{{ $carta->nome }}</td>
                        <td id="ataque1">{{ \App\Models\Ataque::find($carta->ataque1)->nome}}</td>
                        <!-- \App\Models\Ataque::find($carta->ataque1)->nome procura direto os nomes-->
                        <td id="ataque2">{{ \App\Models\Ataque::find($carta->ataque2)->nome }}</td>
                        <td id="hp">{{ $carta->hp }}</td>
                        <td id="preco">{{ $carta->preco }}</td>
                        <td id="tipo">{{ \App\Models\Tipo::find($carta->tipo)->nome }}</td>
                        <td id="raridade">{{ \App\Models\Raridade::find($carta->raridade)->nome }}</td>
                        
                        <td>
                            <a href="{{ route('cartas.edit', $carta->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('cartas.destroy', $carta->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="cartas/create"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white ml-3 mt-2">Nova Carta</button></a>
</x-app-layout>