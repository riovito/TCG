<x-app-layout>
    <h1 class="display-2 ml-3" style="color: white;">Adicionar Carta - Tipo e Detalhes</h1>
    <br>
    <div class='container'>
        <form action="{{ route('carta.store.type') }}" method="POST">
            @csrf
            

            <!-- Campos por tipo -->
            <div id="pokemonFields" style="display: none;">
                <div class="mb-3">
                    <label for="descricao" class="form-label text-light">Descrição</label>
                    <input type="text" name="descricao" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="hp" class="form-label text-light">HP</label>
                    <input type="number" name="hp" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="fraqueza" class="form-label text-light">Fraqueza</label>
                    <input type="text" name="fraqueza" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="resistencia" class="form-label text-light">Resistência</label>
                    <input type="text" name="resistencia" class="form-control">
                </div>
            </div>

            <div id="magicFields" style="display: none;">
                <div class="mb-3">
                    <label for="descricao" class="form-label text-light">Descrição</label>
                    <input type="text" name="descricao" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="mana" class="form-label text-light">Mana</label>
                    <input type="number" name="mana" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="poder" class="form-label text-light">Poder</label>
                    <input type="number" name="poder" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="set" class="form-label text-light">Set</label>
                    <input type="text" name="set" class="form-control">
                </div>
            </div>

            <div id="yugiohFields" style="display: none;">
                <div class="mb-3">
                    <label for="descricao" class="form-label text-light">Descrição</label>
                    <input type="text" name="descricao" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="atributo" class="form-label text-light">Atributo</label>
                    <input type="text" name="atributo" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="nivel" class="form-label text-light">Nível</label>
                    <input type="number" name="nivel" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="ataque" class="form-label text-light">Ataque</label>
                    <input type="number" name="ataque" class="form-control">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Salvar Carta</button>
        </form>
    </div>

    <script>
        document.querySelector('select[name="tipo"]').addEventListener('change', function() {
            var tipo = this.value;
            document.getElementById('pokemonFields').style.display = tipo === 'pokemon' ? 'block' : 'none';
            document.getElementById('yugiohFields').style.display = tipo === 'yugioh' ? 'block' : 'none';
            document.getElementById('magicFields').style.display = tipo === 'magic' ? 'block' : 'none';
            // Mostrar ou esconder campos para outros tipos
        });
    </script>
</x-app-layout>
