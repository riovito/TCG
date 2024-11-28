<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <footer class="bg-dark text-white fixed-bottom text-center">
                <div class="container">
                    <p class="m-1">
                      &copy; {{ date('Y') }} PokeUniverse. Todos os direitos reservados.
                    </p>
                    <div class="mb-1">
                        <!-- Social Media Links -->
                        <a href="https://www.facebook.com/Dresleigb?locale=pt_BR" target="_blank" class="text-white mx-2" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://x.com/DragoonMhystic" target="_blank" class="text-white mx-2" aria-label="Twitter">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="https://instagram.com/triovo.idai" target="_blank" class="text-white mx-2" aria-label="Instagram">
                           <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/vitório-augusto-azevedo-betineli-5708a2237/" target="_blank" class="text-white mx-2" aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://youtu.be/PYTPHIEXGzo?si=wWdvzci01xh8h4jO" target="_blank" class="text-white mx-2" aria-label="YouTube">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                </div>
            </footer>

        </div>
    </body>
</html>
