<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Mi App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-42 bg-white shadow-md h-screen sticky top-0 flex flex-col">
        <div class="p-6 text-xl font-bold text-blue-600 border-b">VentasApp</div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="/" class="block px-4 py-2 rounded hover:bg-blue-100">Inicio</a>
            <a href="{{ route('productos.index') }}" class="block px-4 py-2 rounded hover:bg-blue-100">Productos</a>
            <a href="{{ route('clientes.index') }}" class="block px-4 py-2 rounded hover:bg-blue-100">Clientes</a>
            <a href="/acercade" class="block px-4 py-2 rounded hover:bg-blue-100">Acerca de</a>
        </nav>
        <div class="p-4 border-t">
            <a href="/logout" class="text-red-500 hover:underline">Cerrar sesión</a>
        </div>
    </aside>

    <main class="bg-gray-100 flex-1 max-w-full overflow-x-auto p-6 justify-center items-center">

        {{-- Migas de pan --}}
        <nav class="text-sm text-gray-600 mb-4" aria-label="Breadcrumb">
            <ol class="list-reset flex">
                <li>
                    <a href="/" class="text-blue-600 hover:underline">Inicio</a>
                </li>
                @hasSection('breadcrumb')
                    <li><span class="mx-2">/</span></li>
                    @yield('breadcrumb')
                @endif
            </ol>
        </nav>
    
        @yield('content')
    </main>

</body>

</html>
