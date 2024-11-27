<x-app-layout>
    <h1 class="text-danger display-5 m-3">Editar Usuário: {{ $user->name }}</h1>

    <section class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 input-group input-group">
                        <span class="input-group-text" id="name">Nome:</span>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="form-control">
                    </div>

                    <div class="mb-3 input-group input-group">
                    <span class="input-group-text" id="email">Email:</span>
                    <input type="text" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-control">
                    </div>

                    <div class=" input-group input-group">
                    <span class="input-group-text" id="password">Senha:</span>
                    <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <p class="text-white mb-3">(Não altere caso deseje manter a senha anterior)</p>

                    <div class="mb-3 d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form> 
            </div>
        </div>
    </section>
</x-app-layout>
