<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Mi primer crud con Laravel 11</title>
</head>
<body class="font-sans bg-gray-100">
     <!-- Lo que hace es llamar cierta parte de un codigo cuando estemos en esta plantilla -->
      {{-- Aca se declara --}}
      @yield('contenido')


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"
		></script>
  </body>
</html>