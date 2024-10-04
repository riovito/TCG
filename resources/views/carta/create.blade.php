<x-app-layout>
    <h1 class="display-2 ml-3" style="color: white;">Adicionar Carta</h1>

    <br>

    <div class='container'>
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
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>
</x-app-layout>