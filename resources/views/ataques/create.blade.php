
<x-app-layout>
    <h1 class="text-danger display-5 m-3">Adicionar Ataque</h1>

    <br>

    <div class='container'>

        <form action="{{ route('ataques.store') }}" method="POST">
            @csrf
            
            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="name">Nome:</span>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="tipo">Tipo:</span>
                <input type="text" name="tipo" class="form-control" required>
            </div>
            
            <div class="mb-3 input-group input-descricao">
                <span class="input-group-text" id="name">Descrição:</span>
                <input type="text" name="descricao" class="form-control" required>
            </div>

            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="energia">Energia:</span>
                <input type="text" name="energia" class="form-control" required>
            </div>

            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="dano">Dano:</span>
                <input type="text" name="dano" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Próximo</button>
            <a href="{{ route('ataques.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

</x-app-layout>
