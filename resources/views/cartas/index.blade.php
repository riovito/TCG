<x-app-layout>
    <h1 style="color: white">Cartas</h1>

    <table class="table table-striped-columns table-dark table-bordered border-gray">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ataque 1</th>
                <th>Ataque 2</th>
                <th>HP</th>
                <th>Preço</th>
                <th>Tipo</th>
                <th>Raridade</th>
                <th></th>
            </tr>

        </thead>
        

        <tbody>
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
                        <a href="{{ route('cartas.edit', $carta->id) }}" class="btn btn-warning">Editar</a>
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

    <a href="cartas/create"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white ml-3 mt-2">CREATE</button></a>
</x-app-layout>