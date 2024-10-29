@extends('layouts/main')

@section('contenido')
    <div class="p-4"></div>
    <h2 class="text-2xl font-bold text-center pb-4">Información de <a
            class="underline decoration-sky-500">{{ $item->name }}</a>
    </h2>

    <div class="md:flex md:justify-center">
        <div class="md:w-96 bg-white p-6 rounded-xl shadow-lg border border-gray-200 relative overflow-hidden">
            
            <!-- Encabezado con icono y texto -->
            <div class="flex items-center space-x-3 pb-4 border-b border-gray-200 mb-4">
              <i class="bi bi-person-circle text-blue-600 text-2xl"></i>
              <h2 class="text-lg font-semibold text-gray-900">Detalles del usuario 👀</h2>
            </div>
          
            <!-- Información de usuario -->
            <div class="space-y-4">
              <!-- ID -->
              <div class="flex items-center space-x-3">
                <i class="bi bi-sort-numeric-down text-gray-500"></i>
                <span class="text-gray-700 font-medium">ID:</span>
                <span class="text-gray-900 font-semibold">{{ $item->id }}</span>
              </div>
              <!-- Nombre -->
              <div class="flex items-center space-x-3">
                <i class="bi bi-person text-gray-500"></i>
                <span class="text-gray-700 font-medium">Nombre:</span>
                <span class="text-gray-900 font-semibold">{{ $item->name }}</span>
              </div>
            </div>
          
            <!-- Botón centrado con efectos de transición -->
            <div class="flex justify-center pt-8">
              <a href="{{ route('index') }}">
                <button class="flex items-center space-x-2 bg-red-500 hover:bg-amber-600 text-white font-medium px-5 py-2 rounded-lg shadow-md transition transform duration-300 ease-in-out hover:scale-105 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2">
                  <span>Volver</span>
                </button>
              </a>
            </div>
          </div>
          
          
    </div>
@endsection
