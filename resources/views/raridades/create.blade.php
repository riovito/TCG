
<x-app-layout>
    <h1 class="text-danger display-5 m-3">Adicionar Raridade</h1>

    <br>

    <div class='container' style="max-width: 800px">
        <form action="{{ route('raridades.store') }}" method="POST">
            @csrf
            
            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="nome">Nome:</span>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="chance">Chance:</span>
                <input type="text" name="chance" class="form-control" required>
            </div>
            
            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="descricao">Descrição:</span>
                <input type="text" name="descricao" class="form-control" required>
            </div>

            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="exclusividade">Exclusividade:</span>
                <input type="text" name="exclusividade" class="form-control" required>
            </div>

            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="estrelas">Estrelas:</span>
                <input type="text" name="estrelas" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Próximo</button>
            <a href="{{ route('raridades.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

</x-app-layout>
