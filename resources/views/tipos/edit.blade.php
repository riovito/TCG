<x-app-layout>
    <h1 class="text-danger display-5 m-3">Editar Tipo: {{ $tipo->nome }}</h1>

    <section class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route('tipos.update', $tipo->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="nome">Nome:</span>
                        <input type="text" id="nome" name="nome" value="{{ old('nome', $tipo->nome) }}" class="form-control">
                    </div>
                    

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="fraqueza">Fraqueza:</span>
                        <input type="text" id="fraqueza" name="fraqueza" value="{{ old('fraqueza', $tipo->fraqueza) }}" class="form-control">
                    </div>

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="resistencia">Resistência:</span>
                        <input type="text" id="resistencia" name="resistencia" value="{{ old('resistencia', $tipo->resistencia) }}" class="form-control">
                    </div>

                    <div class="mb-3 input-group input-group">
                    <span class="input-group-text" id="cor">Cor:</span>
                        <input type="text" id="cor" name="cor" value="{{ old('cor', $tipo->cor) }}" class="form-control">
                    </div>

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="efetivo">Efetivo Contra:</span>
                        <input type="text" id="efetivo" name="efetivo" value="{{ old('efetivo', $tipo->efetivo) }}" class="form-control">
                    </div>

                    <div class="mb-3 d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{ route('tipos.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form> 
            </div>
        </div>
    </section>
</x-app-layout>
