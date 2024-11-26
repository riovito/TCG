<x-app-layout>
    <h1 class="text-white">Editar Carta </h1>

    <section class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route('cartas.update', $carta->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label text-light" for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" value="{{ old('nome', $carta->nome) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light" for="valor">Valor (Reais):</label>
                        <input type="text" id="valor" name="valor" value="{{ old('valor', $carta->valor) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light" for="PSA">PSA:</label>
                        <input type="text" id="PSA" name="PSA" value="{{ old('PSA', $carta->PSA) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light" for="raridade">Raridade:</label>
                        <input type="text" id="raridade" name="raridade" value="{{ old('raridade', $carta->raridade) }}" class="form-control">
                    </div>

                    <div class="mb-3 d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{ route('cartas.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form> 
            </div>
        </div>
    </section>
</x-app-layout>
