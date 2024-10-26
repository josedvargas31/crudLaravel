@extends('layouts/main')

@section('contenido')
    <div class="p-4"></div>
    <h2 class="text-2xl font-bold text-center">Información de  <a class="underline decoration-sky-500">{{ $item->name }}</a></h2>
    <div class="md:flex md:justify-center">
        {{-- <div class="md:w-5/12 p-5">
            <img class="rounded-xl " src="{{ asset('img/imgRegister.svg') }}" alt="Imagen de registro">
        </div> --}}
        <div class="md:w-96 bg-white p-6 rounded-lg shadow-xl">
           id <span>{{ $item->id }}</span>
           name <span>{{ $item->name }}</span>
           <button    class="transition ease-in-out delay-150 bg-red-500 hover:-translate-y-1 hover:scale-110 hover:bg-amber-600 duration-300 text-white rounded-lg px-3 py-2 m-2">
            <i class="bi bi-arrow-bar-left"></i><a href="{{route('index')}}">Volver</a>
           </button>
        </div>
    </div>
@endsection
