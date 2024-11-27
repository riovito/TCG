<x-app-layout>
    <h1 style="color: white">Ataques</h1>

    <table class="table table-striped-columns table-dark table-bordered border-gray">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Descrição</th>
                <th>Energia</th>
                <th>Dano</th>
                <th></th>
            </tr>

        </thead>
        

        <tbody>
            @foreach ($ataques as $ataque)
                <tr>
                    <td class="colunas">{{ $ataque->id }}</td>
                    <td id="nome">{{ $ataque->nome }}</td>
                    <td id="tipo">{{ $ataque->tipo }}</td>
                    <td id="descricao">{{ $ataque->descricao }}</td>
                    <td id="energia">{{ $ataque->energia }}</td>
                    <td id="dano">{{ $ataque->dano }}</td>

                    <td>
                            <a href="{{ route('ataques.edit', $ataque->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('ataques.destroy', $ataque->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="ataques/create"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white">CREATE</button></a>
</x-app-layout>