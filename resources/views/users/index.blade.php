<x-app-layout>
    <h1 style="color: white">Carta INDEX</h1>

    <table class="table table-striped-columns table-dark table-bordered border-gray">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th></th>
            </tr>

        </thead>
        

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="colunas">{{ $user->id }}</td>
                    <td id="name">{{ $user->nome }}</td>
                    <td id="email">{{ $user->email }}</td>
                    <td id="password">{{ $user->password }}</td>

                    <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="users/create"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white">CREATE</button></a>
</x-app-layout>