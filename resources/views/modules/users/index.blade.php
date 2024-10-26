@extends('layouts/main')

{{-- Declaramos en donde va a trabajar, en este caso, trabajara en el archivo main --}}
{{-- Aqui se utiliza --}}
@section('contenido')
    <div class="mt-4">
        <h2 class="text-center text-2xl font-bold">Crud con laravel 11 - Nombres de los usuarios</h2>
        {{-- <img class="rounded-xl w-12" src="{{ asset('img/logoD.svg') }}" alt="Logo"> --}}
        <div class="flex justify-center p-4">
            <button
                class=" transition duration-700 ease-in-out inline-block bg-black hover:-translate-y-1  hover:scale-110 rounded-lg  p-4">
                {{-- inline block - ayuda a que el contendedor blanco se ajuste al texto --}}
                <a href="{{ route('create') }}" class="text-white text-center text-2xl font-bold hover">
                    <i class="bi bi-plus"></i>Agregar nombre
                </a>
            </button>
        </div>

        <div class="flex justify-center p-auto">
            <div class="container flex justify-center rounded-xl shadow-2xl p-4 w-8/12">
                <div class="overflow-hidden rounded-lg shadow-lg border bg-white">

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status</th>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Row 1 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap flex items-center space-x-3">
                                    <img src="https://via.placeholder.com/40" alt="Avatar" class="w-10 h-10 rounded-full">
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">Tony Reichert</div>
                                        <div class="text-sm text-gray-500">tony.reichert@example.com</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center space-x-2">
                                    <button
                                        class="transition ease-in-out delay-150 bg-stone-400 hover:-translate-y-1 hover:scale-110 hover:bg-zinc-600 duration-300 text-white rounded-lg px-3 py-2 m-2">
                                        <i class="bi bi-list-columns-reverse"></i><a href="" class="p-2">Mostrar</a>
                                    </button>
                                    <button
                                        class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 text-white rounded-lg px-3 py-2 m-2">
                                        <i class="bi bi-pen-fill"></i><a href="" class="p-2">Editar</a>
                                    </button>
                                    <button
                                        class="transition ease-in-out delay-150 bg-red-500 hover:-translate-y-1 hover:scale-110 hover:bg-amber-600 duration-300 text-white rounded-lg px-3 py-2 m-2">
                                        <i class="bi bi-archive-fill"></i><a href="" class="p-2">Eliminar</a>
                                    </button>
                                </td>
                            </tr>
                            <!-- Row 2 -->

                            <!-- Repeat rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
@endsection
