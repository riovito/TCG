<x-app-layout>
    <h1 class="text-danger display-5 m-3">Editar Ataque: {{ $ataque->nome }}</h1>

    <section class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route('ataques.update', $ataque->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="password">Nome:</span>
                        <input type="text" id="nome" name="nome" value="{{ old('nome', $ataque->nome) }}" class="form-control">
                    </div>
                    
                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="password">Descrição:</span>
                        <input type="text" id="descricao" name="descricao" value="{{ old('descricao', $ataque->descricao) }}" class="form-control">
                    </div>

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="password">Tipo:</span>
                        <input type="text" id="tipo" name="tipo" value="{{ old('tipo', $ataque->tipo) }}" class="form-control">
                    </div>

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="password">Energia:</span>
                        <input type="text" id="energia" name="energia" value="{{ old('energia', $ataque->energia) }}" class="form-control">
                    </div>

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="password">Dano:</span>
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
