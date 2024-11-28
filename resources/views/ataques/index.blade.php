<x-app-layout>
    <h1 class="text-danger display-3 ml-3">Ataques</h1>

    <div style="max-width: 1450px;">
        <table class="table table-striped-columns table-dark table-bordered border-gray m-3">
            <thead>
                <tr>
                    <th style="width: 4%">ID</th>
                    <th style="width: 10%">Nome</th>
                    <th style="width: 15%">Tipo</th>
                    <th style="width: 25%">Descrição</th>
                    <th style="width: 10%">Energia</th>
                    <th style="width: 10%">Dano</th>
                    <th style="width: 10%"></th>
                </tr>

            </thead>
            

            <tbody class="table-group-divider">
                @foreach ($ataques as $ataque)
                    <tr>
                        <td class="colunas">{{ $ataque->id }}</td>
                        <td id="nome">{{ $ataque->nome }}</td>
                        <td id="tipo">{{ $ataque->tipo }}</td>
                        <td id="descricao">{{ $ataque->descricao }}</td>
                        <td id="energia">{{ $ataque->energia }}</td>
                        <td id="dano">{{ $ataque->dano }}</td>

                        <td>
                                <a href="{{ route('ataques.edit', $ataque->id) }}" class="btn btn-primary">Editar</a>
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
    </div>
    <a href="ataques/create"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white ml-3 mt-2">CREATE</button></a>
</x-app-layout>