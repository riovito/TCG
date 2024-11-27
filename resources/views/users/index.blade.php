<x-app-layout>
    <h1 class="text-danger display-3 ml-3">Usuários</h1>
    <div style="max-width: 1450px;">
        <table class="table table-striped-columns table-dark table-bordered border-gray m-3">
            <thead>
                <tr>
                    <th style="width: 4%">#</th>
                    <th style="width: 10%">Nome</th>
                    <th style="width: 15%">Email</th>
                    <th style="width: 25%">Senha</th>
                    <th style="width: 10%"></th>
                </tr>

            </thead>
            

            
            <tbody class="table-group-divider">
                @foreach ($users as $user)
                    <tr>
                        <td class="colunas">{{ $user->id }}</td>
                        <td id="name">{{ $user->name }}</td>
                        <td id="email">{{ $user->email }}</td>
                        <td id="password">{{ $user->password }}</td>

                        <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
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
    </div>
    <a href="users/create"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white ml-3 mt-5">CREATE</button></a>
</x-app-layout>