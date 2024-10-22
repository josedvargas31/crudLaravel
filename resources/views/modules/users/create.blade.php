@extends('layouts/main')

<div class="p-4"></div>
<h2 class="text-2xl font-bold text-center">Agregar un usuario. . .</h2>
<div class="md:flex md:justify-center">
    <div class="md:w-5/12 p-5">
        <img class="rounded-xl " src="{{ asset('img/logo.svg') }}" alt="Imagen de registro">
    </div>
    <div class="md:w-96 bg-white p-6 rounded-lg shadow-xl">
        <form action="{{ route('store') }}" method="post">
                @csrf
                @method('POST')
            <div class="mb-4">
                <label for="name" class="block text-gray-600 text-sm font-bold mb-2">Nombre</label>
                <input type="text" name="name" id="name" class="input w-full" placeholder="Ingrese su nombre" required>
            </div>

            <button type="submit" class="button bg-sky-600 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded-full w-full">
                Registrar usuario
            </button>
        </form>
    </div>
</div>
