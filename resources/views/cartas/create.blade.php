
<x-app-layout>
    <h1 class="text-danger display-5 m-3">Adicionar Carta</h1>

    <br>

    <div class='container' style="max-width: 800px">

        <form action="{{ route('cartas.store') }}" method="POST">
            @csrf
            
            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="nome">Nome:</span>
                <input type="text" name="nome" class="form-control" id="nome_cartas" required>
            </div>

            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="ataque1">Ataque1:</span>
                <select name="ataque1" class="form-select" required>
                    <option value="" disabled selected>Selecione um Ataque</option>
                    @foreach($ataques as $ataque)
                        <option value="{{ $ataque->id }}">{{ $ataque->nome }}</option>
                    @endforeach
                </select>
            </div>


            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="ataque2">Ataque2:</span>
                <select name="ataque2" class="form-select">
                    <option value="" disabled selected>Selecione um Ataque</option>
                    @foreach($ataques as $ataque)
                        <option value="{{ $ataque->id }}">{{ $ataque->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="hp">HP:</span>
                <input type="text" name="hp" class="form-control" id="hp_cartas" required>
            </div>

            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="preco">Preço:</span>
                <input type="text" name="preco" class="form-control" id="preco_cartas" required>
            </div>

            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="tipo">Tipo:</span>
                <select name="tipo" class="form-select" required>
                    <option value="" disabled selected>Selecione um Tipo</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo->id }}">{{ $tipo->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="raridade">Raridade:</span>
                <select name="raridade" class="form-select" required>
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
