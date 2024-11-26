
<x-app-layout>
    <h1 class="display-2 ml-3" style="color: white;">Adicionar Ataque</h1>

    <br>

    <div class='container'>

        <form action="{{ route('ataques.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="" class="form-label text-light">Nome:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">Tipo:</label>
                <input type="text" name="tipo" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label text-light">Descricao:</label>
                <input type="text" name="descricao" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">Energia:</label>
                <input type="text" name="energia" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">Dano:</label>
                <input type="text" name="dano" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Próximo</button>
            <a href="{{ route('ataques.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

</x-app-layout>
