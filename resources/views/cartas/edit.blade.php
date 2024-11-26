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
                        <label class="form-label" for="ataque1">Ataque1:</label>
                        <select id="ataque1" name="ataque1" class="form-select" required>
                            @foreach($ataques as $ataque)
                                <option value="{{ $ataque->id }}" {{ $carta->ataque1 == $ataque->id ? 'selected' : '' }}>
                                    {{ $ataque->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="ataque2">Ataque2:</label>
                        <select id="ataque2" name="ataque2" class="form-select" required>
                            @foreach($ataques as $ataque)
                                <option value="{{ $ataque->id }}" {{ $carta->ataque2 == $ataque->id ? 'selected' : '' }}>
                                    {{ $ataque->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light" for="hp">HP:</label>
                        <input type="text" id="hp" name="hp" value="{{ old('hp', $carta->hp) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light" for="preco">Preço:</label>
                        <input type="text" id="preco" name="preco" value="{{ old('preco', $carta->preco) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="tipo">Tipo:</label>
                        <select id="tipo" name="tipo" class="form-select" required>
                            @foreach($tipos as $tipo)
                                <option value="{{ $tipo->id }}" {{ $carta->tipo == $tipo->id ? 'selected' : '' }}>
                                    {{ $tipo->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="raridade">Raridade:</label>
                        <select id="raridade" name="raridade" class="form-select" required>
                            @foreach($raridades as $raridade)
                                <option value="{{ $raridade->id }}" {{ $carta->raridade == $raridade->id ? 'selected' : '' }}>
                                    {{ $raridade->nome }}
                                </option>
                            @endforeach
                        </select>
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
