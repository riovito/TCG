
<x-app-layout>
    <h1 class="display-2 ml-3" style="color: white;">Adicionar Tipo</h1>

    <br>

    <div class='container'>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="" class="form-label text-light">Nome:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">Email:</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label text-light">Senha:</label>
                <input type="text" name="password" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Próximo</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

</x-app-layout>
