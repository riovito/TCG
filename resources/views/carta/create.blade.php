<x-app-layout>
    <h1 class="display-2 ml-3" style="color: white;">Adicionar Carta</h1>

    <br>

    <div class='container'>
<<<<<<< Updated upstream
        <form action="{{ route('carta.store') }}" method="POST">
            @csrf
            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Nome</label>
                <input name ="nome" type="text" class="form-control" id="" required>
            </div>

            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Valor (Reais)</label>
                <input name ="valor" type="number" class="form-control" id="" required>
            </div>

            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">PSA</label>
                <input name ="PSA" type="number" class="form-control" id="" required>
            </div>

            <div class="mb-3 col-md-8">
                <label   class="form-label text-light">Raridade</label>
                <input name ="raridade" type="text" class="form-control" id="" required>
=======
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
>>>>>>> Stashed changes
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="{{ route('carta.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-app-layout>