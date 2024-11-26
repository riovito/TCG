
<x-app-layout>
    <h1 class="display-2 ml-3" style="color: white;">Adicionar Carta</h1>

    <br>

    <div class='container'>

        <form action="{{ route('tipos.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="" class="form-label text-light">Nome:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">Descricao:</label>
                <input type="text" name="descricao" class="form-control" required>
            </div>
            

            <div class="mb-3">
                <label for="" class="form-label text-light">Fraqueza:</label>
                <input type="text" name="fraqueza" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label text-light">Resistencia:</label>
                <input type="text" name="resistencia" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">Cor:</label>
                <input type="text" name="cor" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label text-light">Efetivo:</label>
                <input type="text" name="efetivo" class="form-control" required>
            </div>
            
            

            <button type="submit" class="btn btn-primary">Próximo</button>
            <a href="{{ route('tipos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

</x-app-layout>
