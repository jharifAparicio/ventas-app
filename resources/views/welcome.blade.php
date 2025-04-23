@extends('layouts.app')

@section('title', 'Bienvenido')

@section('content')

    <div class=" text-[#1b1b18] max-h-screen flex items-center justify-center p-6 w-full">
        <div class="max-w-4xl w-full space-y-10">

            {{-- Encabezado --}}
            <div class="text-center">
                <h1 class="text-5xl font-extrabold text-indigo-600 dark:text-indigo-400">Bienvenido a VentasApp</h1>
                <p class="text-gray-600 dark:text-gray-400 mt-3 text-lg">Gestiona productos, clientes y ventas de forma
                    eficiente.</p>
            </div>

            {{-- Accesos directos --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 justify-center">
                {{-- Productos --}}
                <a href="{{ route('productos.index') }}"
                    class="block p-6 bg-white dark:bg-gray-900 rounded-2xl shadow-md hover:shadow-lg hover:bg-indigo-50 dark:hover:bg-indigo-950 transition">
                    <h2 class="text-xl font-semibold text-indigo-600 dark:text-indigo-400 mb-2">📦 Productos</h2>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Explora y gestiona los productos disponibles.</p>
                </a>

                {{-- Clientes --}}
                <a href="{{ route('clientes.index') }}"
                    class="block p-6 bg-white dark:bg-gray-900 rounded-2xl shadow-md hover:shadow-lg hover:bg-indigo-50 dark:hover:bg-indigo-950 transition">
                    <h2 class="text-xl font-semibold text-indigo-600 dark:text-indigo-400 mb-2">👤 Clientes</h2>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Consulta y administra la información de tus
                        clientes.</p>
                </a>
            </div>
        </div>
    </div>
@endsection
