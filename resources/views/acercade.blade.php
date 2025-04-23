@extends('layouts.app')

@section('title', 'Acerca de')

@section('breadcrumb')
    <li>
        <a href="/acercade" class="text-blue-600 hover:underline">Acerca de</a>
    </li>
@endsection

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-xl shadow-md">
        <h1 class="text-2xl font-semibold text-blue-600 mb-4">Acerca de la Aplicación</h1>
        <p class="text-gray-700 mb-4">
            Esta aplicación fue desarrollada como parte del curso de <strong>Arquitectura de Software (COM350)</strong> en la Universidad San Francisco Xavier.
            Su objetivo es facilitar la gestión de productos y ventas en un entorno web sencillo y funcional.
        </p>
        <div class="mb-4">
            <h2 class="text-lg font-semibold text-gray-800">Estudiante:</h2>
            <p class="text-gray-700">Jharif Aparicio Casillas</p>
        </div>
        <div class="mb-4">
            <h2 class="text-lg font-semibold text-gray-800">Colaborador:</h2>
            <p class="text-gray-700">Carlos Montellano Barriga</p>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Materia:</h2>
            <p class="text-gray-700">Arquitectura de Software – COM350</p>
        </div>
    </div>
@endsection
