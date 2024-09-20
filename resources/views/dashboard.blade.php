<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-2" style="width: 200px" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/bd7273e4-235c-411d-a390-34d3d27365a2/ddmf2it-8f5a4080-00cf-4786-b676-ab988ffadf21.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2JkNzI3M2U0LTIzNWMtNDExZC1hMzkwLTM0ZDNkMjczNjVhMlwvZGRtZjJpdC04ZjVhNDA4MC0wMGNmLTQ3ODYtYjY3Ni1hYjk4OGZmYWRmMjEucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.jF5fn28rY4u_otcExArKxkOKpiRpvE9wwCW89DMsGpQ" alt="" width="72" height="57">
            <h1 class=" display-5 fw-bold text-body-emphasis">Card Nome TBD</h1>
            <div class="col-lg-6 mx-auto">
            <p class="text-white lead mb-4">Muito texto - Muito texto - Muito texto - Muito texto - Muito texto - Muito texto - Muito texto - Muito texto - Muito texto - Muito texto - .</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white">Pokémon TCG</button> <!-- mostra cartas de pokemon, podendo acessar detalhes -->
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white">Magic: The Gathering</button> <!-- mostra cartas de pokemon, podendo acessar detalhes -->
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4 gap-3 text-white">Yu-Gi-Oh!</button> <!-- mostra cartas de pokemon, podendo acessar detalhes -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
