@extends('layouts/main')

{{-- Declaramos en donde va a trabajar, en este caso, trabajara en el archivo main --}}
{{-- Aqui se utiliza --}}
@section('contenido')
<div class="mt-4">
    <h2 class="text-center text-2xl font-bold">Crud con laravel 11 - Nombres de los usuarios</h2>
    {{-- <img class="rounded-xl w-12" src="{{ asset('img/logoD.svg') }}" alt="Logo"> --}}
    <div class="flex justify-center p-4">
        <div class="inline-block bg-black shadow-md rounded-lg"> {{-- inline block - ayuda a que el contendedor blanco se ajuste al texto --}}
          <div class="p-4">
            <a href="{{ route('create') }}" class="text-white text-center text-2xl font-bold hover">Agregar</a>
          </div>
        </div>
      </div>
</div>
@endsection