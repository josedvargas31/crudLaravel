<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Tailwind --}}
    @vite('resources/css/app.css')
    {{-- Iconos de Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- Sweet Alert --}}
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Mi primer crud con Laravel 11</title>
</head>

<body class="font-sans bg-gray-100">

    <header class="p-5 border-b bg-white shadow flex justify-between items-center">
        <img class="rounded-xl w-12" src="{{ asset('img/logoD.svg') }}" alt="Imagen de registro">
        <h1 class="text-3xl font-black">
            Crud
        </h1>
    </header>


    {{-- CDN jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Lo que hace es llamar cierta parte de un codigo cuando estemos en esta plantilla -->
    {{-- Aca se declara --}}
    @yield('contenido')
    @yield('scripts')

</body>

</html>
