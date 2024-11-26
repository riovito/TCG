<x-app-layout>
    <h1 style="color: white">Carta INDEX</h1>

    <table class="table table-striped-columns table-dark table-bordered border-gray">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Fraqueza</th>
                <th>Resistencia</th>
                <th>Cor</th>
                <th>Efetivo</th>
                <th></th>
            </tr>

        </thead>
        

        <tbody>
            @foreach ($tipos as $tipo)
                <tr>
                    <td class="colunas">{{ $tipo->id }}</td>
                    <td id="nome">{{ $tipo->nome }}</td>
                    <td id="fraqueza">{{ $tipo->fraqueza }}</td>
                    <td id="resistencia">{{ $tipo->resistencia }}</td>
                    <td id="cor">{{ $tipo->cor }}</td>
                    <td id="efetivo">{{ $tipo->efetivo }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="tipos/create"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white">CREATE</button></a>
</x-app-layout>