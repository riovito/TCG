<x-app-layout>
    <h1 style="color: white">Carta INDEX</h1>
<<<<<<< Updated upstream
=======
    <a href="carta/create"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white">CREATE</button></a>
    <a href="carta/edit"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white">UPDATE</button></a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>PSA</th>
                <th>Raridade</th>
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
<!--                         <a href="{{ route('cartas.show', $carta->id) }}" class="btn btn-info">Detalhes</a> -->
                        <a href="{{ route('cartas.edit', $carta->id) }}" class="btn btn-warning">Editar</a>
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
>>>>>>> Stashed changes
</x-app-layout>