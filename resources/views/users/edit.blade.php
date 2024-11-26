<x-app-layout>
    <h1 class="text-white">User EDIT</h1>

    <section class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label text-light" for="name">Nome:</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light" for="email">Email:</label>
                        <input type="text" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light" for="password">Senha (Deixe em branco caso deseje manter a senha anterior):</label>
                        <input type="password" name="password" id="password" class="form-control">
                        </div>

                    <div class="mb-3 d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form> 
            </div>
        </div>
    </section>
</x-app-layout>
