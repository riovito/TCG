
<x-app-layout>
    <h1 class="text-danger display-5 m-3">Adicionar Tipo</h1>

    <br>

    <div class='container' style="max-width: 800px">

        <form action="{{ route('tipos.store') }}" method="POST">
            @csrf
            
            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="nome">Nome:</span>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="fraqueza">Fraqueza:</span>
                <input type="text" name="fraqueza" class="form-control" required>
            </div>
         
            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="resistencia">Resistência:</span>
                <input type="text" name="resistencia" class="form-control" required>
            </div>

            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="cor">Cor:</span>
                <input type="text" name="cor" class="form-control" required>
            </div>

            <div class="mb-3 input-group input-group">
                <span class="input-group-text" id="efetivo">Efetivo Contra:</span>
                <input type="text" name="efetivo" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Próximo</button>
            <a href="{{ route('tipos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

</x-app-layout>
