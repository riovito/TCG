<x-app-layout>
    <h1 class="text-white">Editar Raridade: {{ $raridade->nome }}</h1>

    <section class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route('raridades.update', $raridade->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label text-light" for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" value="{{ old('nome', $raridade->nome) }}" class="form-control">
                    </div>
                    

                    <div class="mb-3">
                        <label class="form-label text-light" for="chance">Chance:</label>
                        <input type="text" id="chance" name="chance" value="{{ old('chance', $raridade->chance) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light" for="descricao">Descrição:</label>
                        <input type="text" id="descricao" name="descricao" value="{{ old('descricao', $raridade->descricao) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light" for="exclusividade">Exclusividade:</label>
                        <input type="text" id="exclusividade" name="exclusividade" value="{{ old('exclusividade', $raridade->exclusividade) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light" for="estrelas">Estrelas:</label>
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
