<x-app-layout>
    <h1 class="display-2 ml-3" style="color: white;">Adicionar Carta</h1>

    <br>

    <div class='container'>

        <form action="{{ route('carta.store.basic') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="" class="form-label text-light">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome_carta" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">Valor (Reais)</label>
                <input type="number" name="valor" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">PSA</label>
                <input type="number" name="PSA" class="form-control">
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">Raridade</label>
                <input type="text" name="raridade" class="form-control">
            </div>

            <div class="mb-3">
                <label for="tipo" class="form-label text-light">Tipo</label>
                <select name="tipo" class="form-control" required>
                    <option value="">Selecione o tipo</option>
                    <option value="pokemon">Pokemon</option>
                    <option value="magic">Magic</option>
                    <option value="yugioh">YuGiOh</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Próximo</button>
            <a href="{{ route('carta.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script>
        document.querySelector('select[name="tipo"]').addEventListener('change', function() {
            var tipo = this.value;
            document.getElementById('pokemonFields').style.display = tipo === 'pokemon' ? 'block' : 'none';
            document.getElementById('magicFields').style.display = tipo === 'magic' ? 'block' : 'none';
            document.getElementById('yugiohFields').style.display = tipo === 'yugioh' ? 'block' : 'none';
        });
    </script>
</x-app-layout>
