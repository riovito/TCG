<x-app-layout>
    <h1 class="text-danger display-3 ml-3">Tipos</h1>
    <div style="max-width: 1450px;">
        <table class="table table-striped-columns table-dark table-bordered border-gray m-3">
            <thead>
                <tr>
                    <th style="width: 4%">#</th>
                    <th style="width: 10%">Nome</th>
                    <th style="width: 15%">Fraqueza</th>
                    <th style="width: 25%">Resistência</th>
                    <th style="width: 10%">Cor</th>
                    <th style="width: 10%">Efetivo Contra</th>
                    <th style="width: 10%"></th>
                </tr>

            </thead>
            

            <tbody class="table-group-divider">
                @foreach ($tipos as $tipo)
                    <tr>
                        <td class="colunas">{{ $tipo->id }}</td>
                        <td id="nome">{{ $tipo->nome }}</td>
                        <td id="fraqueza">{{ $tipo->fraqueza }}</td>
                        <td id="resistencia">{{ $tipo->resistencia }}</td>
                        <td id="cor">{{ $tipo->cor }}</td>
                        <td id="efetivo">{{ $tipo->efetivo }}</td>

                        <td>
                                <a href="{{ route('tipos.edit', $tipo->id) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('tipos.destroy', $tipo->id) }}" method="POST" style="display: inline;">
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
    <a href="tipos/create"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white ml-3 mt-2">Novo Tipo</button></a>
</x-app-layout>