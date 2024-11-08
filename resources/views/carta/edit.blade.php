<x-app-layout>
    <h1 style="color: white">Carta EDIT</h1>

    <section class="edit-form">
        <div class="fomr-container">
            <form method="POST" action="{{ route('cartas.updtade', $carta->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="form-label" for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="{{ old('nome', $carta->nome) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="valor">Valor:</label>
                    <input type="decimal" id="valor" name="valor" value="{{ old('valor', $carta->valor) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="PSA">PSA:</label>
                    <input type="text" id="PSA" name="PSA" value="{{ old('PSA', $carta->PSA) }}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="raridade">Raridade:</label>
                    <input type="text" id="raridade" name="raridade" value="{{ old('raridade', $carta->raridade) }}" class="form-input">
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-primary">Salvar</button>
                    <a href="{{ route(carta.index') }}" class="btn-secondary">Cancelar</a>
                </div>
        
            </form> 
        </div>
    </section>
</x-app-layout>