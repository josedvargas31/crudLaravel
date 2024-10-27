@extends('layouts/main')

@section('contenido')
    <div class="p-4"></div>
    <h2 class="text-2xl font-bold text-center">Actualizar usuario. . .</h2>
    <div class="md:flex md:justify-center">
        <div class="md:w-5/12 p-5">
            <img class="rounded-xl " src="{{ asset('img/imgRegister.svg') }}" alt="Imagen de registro">
        </div>
        <div class="md:w-96 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('update', $item->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 text-sm font-bold mb-2">Nombre</label>
                    <input type="text" name="name" id="name" class="input w-full" placeholder="Ingrese su nombre"
                        required value={{ $item->name }}>
                </div>

                <button type="submit"
                    class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 text-white rounded-lg px-2 py-2 m-2">
                    Actualizar usuario
                </button>
            </form>
        </div>
    </div>
@endsection
