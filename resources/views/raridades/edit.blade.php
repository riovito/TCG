<x-app-layout>
    <h1 class="text-danger display-5 m-3">Editar Raridade: {{ $raridade->nome }}</h1>

    <section class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route('raridades.update', $raridade->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="nome">Nome:</span>
                        <input type="text" id="nome" name="nome" value="{{ old('nome', $raridade->nome) }}" class="form-control">
                    </div>
                    

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="chance">Chance:</span>
                        <input type="text" id="chance" name="chance" value="{{ old('chance', $raridade->chance) }}" class="form-control">
                    </div>

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="descricao">Descrição:</span>
                        <input type="text" id="descricao" name="descricao" value="{{ old('descricao', $raridade->descricao) }}" class="form-control">
                    </div>

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="exclusividade">Exclusividade:</span>
                        <input type="text" id="exclusividade" name="exclusividade" value="{{ old('exclusividade', $raridade->exclusividade) }}" class="form-control">
                    </div>

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="estrelas">Estrelas:</span>
                        <input type="text" id="estrelas" name="estrelas" value="{{ old('estrelas', $raridade->estrelas) }}" class="form-control">
                    </div>

                    <div class="mb-3 d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{ route('raridades.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form> 
            </div>
        </div>
    </section>
</x-app-layout>
