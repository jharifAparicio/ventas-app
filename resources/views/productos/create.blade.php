@extends('layouts.app')

@section('title', 'lista de productos')

@section('breadcrumb')
    <li>
        <a href="{{ route('productos.index') }}" class="text-blue-600 hover:underline">Productos&MediumSpace;</a>
    </li>
    <li class="text-gray-500">/&MediumSpace;Crear</li>
@endsection

@section('content')
    <div class=" text-[#1b1b18] max-h-screen flex items-center justify-center p-6 w-full">
        <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Crear Nuevo Producto</h1>
            <form action="{{ route('productos.store') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="nombre" class="block font-medium text-gray-700">Nombre</label>
                    <input type="text" name="nombre" id="nombre" required
                        class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="descripcion" class="block font-medium text-gray-700">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion" required
                        class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="precio" class="block font-medium text-gray-700">Precio</label>
                    <input type="number" name="precio" id="precio" required step="0.01" min="0"
                        class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="stock" class="block font-medium text-gray-700">Stock</label>
                    <input type="number" name="stock" id="stock" required min="0"
                        class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <button type="submit"
                    class="w-full bg-green-600 text-white font-semibold py-2 rounded-lg hover:bg-green-700 transition">
                    Crear Producto
                </button>
            </form>
        </div>
    </div>
@endsection
