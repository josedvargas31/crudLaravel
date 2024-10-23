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
                    <a href="{{ route('create') }}" class="text-white text-center text-2xl font-bold hover">
                        <i class="bi bi-plus"></i>Agregar nombre
                    </a>
                </div>
            </div>
        </div>


        <div class="flex relative justify-center overflow-x-auto sm:rounded-lg">
            <table class="container w-8/12 text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        {{-- <th scope="col" class="px-6 py-3">
                            Category
                        </th> --}}
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="dark:bg-gray-900 border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>

                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Mostrar</a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <button></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
