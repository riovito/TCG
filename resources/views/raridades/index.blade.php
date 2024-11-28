<x-app-layout>
    <h1 class="text-danger display-3 ml-3">Raridades</h1>

    <div style="max-width: 1450px;">
        <table class="table table-striped-columns table-dark table-bordered border-gray m-3">
            <thead>
                <tr>
                    <th style="width: 4%">ID</th>
                    <th style="width: 10%">Nome</th>
                    <th style="width: 15%">Chance</th>
                    <th style="width: 25%">Descrição</th>
                    <th style="width: 10%">Exclusividade</th>
                    <th style="width: 10%">Estrelas</th>
                    <th style="width: 10%"></th>
                </tr>

            </thead>
            

            <tbody class="table-group-divider">
                @foreach ($raridades as $raridade)
                    <tr>
                        <td class="colunas">{{ $raridade->id }}</td>
                        <td id="nome">{{ $raridade->nome }}</td>
                        <td id="chance">{{ $raridade->chance }}</td>
                        <td id="descricao">{{ $raridade->descricao }}</td>
                        <td id="exclusividade">{{ $raridade->exclusividade }}</td>
                        <td id="estrelas">{{ $raridade->estrelas }}</td>

                        <td>
                                <a href="{{ route('raridades.edit', $raridade->id) }}" class="btn btn-primary">Editar</a>
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
    </div>
    <a href="raridades/create"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white ml-3 mt-2">Nova Raridade</button></a>
</x-app-layout>