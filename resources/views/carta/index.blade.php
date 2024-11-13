<x-app-layout>
    <h1 style="color: white">Carta INDEX</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>PSA</th>
                <th>Raridade</th>
                <th></th>
            </tr>

        </thead>

        <tbody>
            @foreach ($carta as $carta)
                <tr>
                    <td class="colunas">{{ $carta->id }}</td>
                    <td id="nome">{{ $carta->nome }}</td>
                    <td id="valor">{{ $carta->valor }}</td>
                    <td id="PSA">{{ $carta->PSA }}</td>
                    <td id="raridade">{{ $carta->raridade }}</td>
                    <td>
<!--                         <a href="{{ route('carta.show', $carta->id) }}" class="btn btn-info">Detalhes</a> -->
                        <a href="{{ route('carta.edit', $carta->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('carta.destroy', $carta->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="carta/create"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white">CREATE</button></a>
</x-app-layout>