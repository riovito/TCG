<x-app-layout>
    <h1 class="text-white">Editar Tipo: {{ $tipo->nome }}</h1>

    <section class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route('tipos.update', $tipo->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label text-light" for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" value="{{ old('nome', $tipo->nome) }}" class="form-control">
                    </div>
                    

                    <div class="mb-3">
                        <label class="form-label text-light" for="fraqueza">Fraqueza:</label>
                        <input type="text" id="fraqueza" name="fraqueza" value="{{ old('fraqueza', $tipo->fraqueza) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light" for="resistencia">Resistência:</label>
                        <input type="text" id="resistencia" name="resistencia" value="{{ old('resistencia', $tipo->resistencia) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light" for="cor">Cor:</label>
                        <input type="text" id="cor" name="cor" value="{{ old('cor', $tipo->cor) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light" for="efetivo">Efetivo Contra:</label>
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
