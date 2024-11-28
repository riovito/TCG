<x-app-layout>
    <h1 class="text-danger display-5 m-3">Editar Carta: {{ $carta->nome }}</h1>

    <section class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route('cartas.update', $carta->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="nome">Nome:</span>
                        <input type="text" id="nome" name="nome" value="{{ old('nome', $carta->nome) }}" class="form-control">
                    </div>

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="ataque1">Ataque 1:</span>
                        <select id="ataque1" name="ataque1" class="form-select" required>
                            @foreach($ataques as $ataque)
                                <option value="{{ $ataque->id }}" {{ $carta->ataque1 == $ataque->id ? 'selected' : '' }}>
                                    {{ $ataque->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="ataque2">Ataque 2:</span>
                        <select id="ataque2" name="ataque2" class="form-select" required>
                            @foreach($ataques as $ataque)
                                <option value="{{ $ataque->id }}" {{ $carta->ataque2 == $ataque->id ? 'selected' : '' }}>
                                    {{ $ataque->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="hp">HP:</span>
                        <input type="text" id="hp" name="hp" value="{{ old('hp', $carta->hp) }}" class="form-control">
                    </div>

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="preco">Preço:</span>
                        <input type="text" id="preco" name="preco" value="{{ old('preco', $carta->preco) }}" class="form-control">
                    </div>

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="tipo">Tipo:</span>
                        <select id="tipo" name="tipo" class="form-select" required>
                            @foreach($tipos as $tipo)
                                <option value="{{ $tipo->id }}" {{ $carta->tipo == $tipo->id ? 'selected' : '' }}>
                                    {{ $tipo->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="raridade">Raridade:</span>
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
