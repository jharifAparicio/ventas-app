@extends('layouts.app')

@section('title', 'lista de productos')

@section('breadcrumb')
    <li>
        <a href="{{ route('clientes.index') }}" class="text-blue-600 hover:underline">Clientes&MediumSpace;</a>
    </li>
    <li class="text-gray-500">/&MediumSpace;Crear</li>
@endsection

@section('content')
    <div class=" text-[#1b1b18] max-h-screen flex items-center justify-center p-6 w-full">
        <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Crear Cliente</h2>
            <form action="{{ route('clientes.store') }}" method="post" class="space-y-4">
                @csrf

                <div>
                    <label for="tipo_documento_id" class="block text-sm font-medium text-gray-700">Tipo de Documento</label>
                    <select name="tipo_documento_id" id="tipo_documento_id"
                        class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        @foreach ($tiposDocumentos as $tipoDocumento)
                            <option value="{{ $tipoDocumento->id }}">
                                {{ $tipoDocumento->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="numero_documento" class="block text-sm font-medium text-gray-700">Número de
                        Documento</label>
                    <input type="text" name="numero_documento" id="numero_documento"
                        class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <div>
                    <label for="razon_social" class="block text-sm font-medium text-gray-700">Razón Social</label>
                    <input type="text" name="razon_social" id="razon_social"
                        class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="mt-4 bg-indigo-600 text-white px-6 py-2 rounded-xl hover:bg-indigo-700 transition">
                        Crear cliente
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
