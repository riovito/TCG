<x-app-layout>
    <h1 class="display-2 ml-3" style="color: white;">Adicionar Carta</h1>

    <br>

    <div class='container'>

        <form action="{{ route('carta.index')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label text-light">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome_carta">
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">Valor (Reais)</label>
                <input type="number" name="valor" class="form-control" id="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">PSA</label>
                <input type="number" name="PSA" class="form-control" id="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">Raridade</label>
                <input type="text" name="raridade" class="form-control" id="">

            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="{{ route('carta.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-app-layout>