<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="px-4 text-center">
        <img class="d-block mx-auto" src="{{ asset('img/icon.png') }}" alt="Icone">
            <!-- PASTA IMG NO PUBLIC src="{{ asset('img/nomeImg.jpg') }}-->
            <h1 class=" display-2 fw-bold text-body-emphasis">Card Universe</h1>
            <div class="col-lg-10 mx-auto">
                <p class="text-white mb-4 mt-4">Bem-vindo ao nosso site dedicado a colecionadores e fãs de cartas de TCG!
                 Aqui, você encontra tudo sobre suas coleções favoritas: Pokémon TCG, Magic: The Gathering e Yu-Gi-Oh!. 
                 Descubra detalhes e informações exclusivas de cada uma, 
                 e compartilhe sua paixão com outros colecionadores.
                 Comece agora e mergulhe no universo das cartas colecionáveis
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="carta"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white m-3">Cartas</button></a>
                    <a href="pokemon"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white m-3">Pokémon TCG</button></a> <!-- mostra cartas de pokemon, podendo acessar detalhes -->
                    <a href="magic"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white m-3">Magic: The Gathering</button> <!-- mostra cartas de pokemon, podendo acessar detalhes -->
                    <a href="yugioh"><button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white m-3">Yu-Gi-Oh!</button> <!-- mostra cartas de pokemon, podendo acessar detalhes -->
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
</x-app-layout>
