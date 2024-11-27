
<x-app-layout>
    <h1 class="display-2 ml-3" style="color: white;">Adicionar Carta</h1>

    <br>

    <div class='container'>

        <form action="{{ route('cartas.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="" class="form-label text-light">Nome:</label>
                <input type="text" name="nome" class="form-control" id="nome_cartas" required>
            </div>

            <div class="form-group">
                <label for="ataque1">Ataque1:</label>
                <select name="ataque1" required>
                    <option value="" disabled selected>Selecione um Ataque</option>
                    @foreach($ataques as $ataque)
                        <option value="{{ $ataque->id }}">{{ $ataque->nome }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="ataque2">Ataque2:</label>
                <select name="ataque2" required>
                    <option value="" disabled selected>Selecione um Ataque</option>
                    @foreach($ataques as $ataque)
                        <option value="{{ $ataque->id }}">{{ $ataque->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">HP:</label>
                <input type="text" name="hp" class="form-control" id="hp_cartas" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">Preço:</label>
                <input type="text" name="preco" class="form-control" id="preco_cartas" required>
            </div>

            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <select name="tipo" required>
                    <option value="" disabled selected>Selecione um Tipo</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo->id }}">{{ $tipo->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="raridade">Raridade:</label>
                <select name="raridade" required>
                    <option value="" disabled selected>Selecione uma Raridade</option>
                    @foreach($raridades as $raridade)
                        <option value="{{ $raridade->id }}">{{ $raridade->nome }}</option>
                    @endforeach
                </select>
            </div>
            

            <button type="submit" class="btn btn-primary">Próximo</button>
            <a href="{{ route('cartas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

</x-app-layout>
