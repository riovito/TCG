<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-2" style="width: 200px" src="https://static.thenounproject.com/png/1032128-200.png" alt="" width="72" height="57">
            <!-- PASTA IMG NO PUBLIC src="{{ asset('img/nomeImg.jpg') }}-->
            <h1 class=" display-5 fw-bold text-body-emphasis">Card Universe</h1>
            <div class="col-lg-6 mx-auto">
            <p class="text-white lead mb-4">Muito texto - Muito texto - Muito texto - Muito texto - Muito texto - Muito texto - Muito texto - Muito texto - Muito texto - Muito texto - .</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="carta"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white">Cartas</button></a>
                    <a href="pokemon"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white">Pokémon TCG</button></a> <!-- mostra cartas de pokemon, podendo acessar detalhes -->
                    <a href="magic"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white">Magic: The Gathering</button> <!-- mostra cartas de pokemon, podendo acessar detalhes -->
                    <a href="yugioh"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white">Yu-Gi-Oh!</button> <!-- mostra cartas de pokemon, podendo acessar detalhes -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
