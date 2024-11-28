
<x-app-layout>
    <h1 class="text-danger display-5 m-3">Adicionar Usuário</h1>

    <br>

    <div class='container'>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            
            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="name">Nome:</span>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="email">Email:</span>
                <input type="text" name="email" class="form-control" required>
            </div>
            
            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="password">Senha:</span>
                <input type="text" name="password" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Próximo</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

</x-app-layout>
