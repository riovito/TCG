<x-app-layout>
    <h1 style="color: white">Raridades</h1>

    <table class="table table-striped-columns table-dark table-bordered border-gray">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Chance</th>
                <th>Descrição</th>
                <th>Exclusividade</th>
                <th>Estrelas</th>
                <th></th>
            </tr>

        </thead>
        

        <tbody>
            @foreach ($raridades as $raridade)
                <tr>
                    <td class="colunas">{{ $raridade->id }}</td>
                    <td id="nome">{{ $raridade->nome }}</td>
                    <td id="chance">{{ $raridade->chance }}</td>
                    <td id="descricao">{{ $raridade->descricao }}</td>
                    <td id="exclusividade">{{ $raridade->exclusividade }}</td>
                    <td id="estrelas">{{ $raridade->estrelas }}</td>

                    <td>
                            <a href="{{ route('raridades.edit', $raridade->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('raridades.destroy', $raridade->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="raridades/create"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white">CREATE</button></a>
</x-app-layout>