<x-app-layout>
    <h1 class="text-white">Ataque EDIT</h1>

    <section class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route('ataques.update', $ataque->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label text-light" for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" value="{{ old('nome', $ataque->nome) }}" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label text-light" for="descricao">Descricao:</label>
                        <input type="text" id="descricao" name="descricao" value="{{ old('descricao', $ataque->descricao) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light" for="tipo">Tipo:</label>
                        <input type="text" id="tipo" name="tipo" value="{{ old('tipo', $ataque->tipo) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light" for="energia">Energia:</label>
                        <input type="text" id="energia" name="energia" value="{{ old('energia', $ataque->energia) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light" for="dano">Dano:</label>
                        <input type="text" id="dano" name="dano" value="{{ old('dano', $ataque->dano) }}" class="form-control">
                    </div>

                    <div class="mb-3 d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{ route('ataques.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form> 
            </div>
        </div>
    </section>
</x-app-layout>
