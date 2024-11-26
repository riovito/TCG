
<x-app-layout>
    <h1 class="display-2 ml-3" style="color: white;">Adicionar Raridade</h1>

    <br>

    <div class='container'>

        <form action="{{ route('raridades.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="" class="form-label text-light">Nome:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">Chance:</label>
                <input type="text" name="chance" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label text-light">Descricao:</label>
                <input type="text" name="descricao" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">Exclusividade:</label>
                <input type="text" name="exclusividade" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">Estrelas:</label>
                <input type="text" name="estrelas" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Próximo</button>
            <a href="{{ route('raridades.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

</x-app-layout>
