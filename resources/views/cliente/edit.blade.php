<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editar Cliente') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg p-6">
                    <form method="POST" action="{{ route('clientes.update', $cliente->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="marca" class="block text-gray-700 font-medium mb-2">Nombre</label>
                            <input type="text" id="nombre" name="nombre"
                                   value="{{ old('nombre', $cliente->nombre) }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300"
                                   placeholder="Nombre del cliente">
                        </div>

                        <div class="mb-4">
                            <label for="apellido" class="block text-gray-700 font-medium mb-2">Apellido</label>
                            <input type="text" id="apellido" name="apellido"
                                   value="{{ old('apellido', $cliente->apellido) }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300"
                                   placeholder="Apellido del Cliente">
                        </div>

                        <div class="mb-4">
                            <label for="telefono" class="block text-gray-700 font-medium mb-2">Telefono</label>
                            <input type="number" id="telefono" name="telefono"
                                   value="{{ old('telefono', $cliente->telefono) }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300"
                                   placeholder="Telefono del Cliente">
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="text" id="email" name="email"
                                   value="{{ old('email', $cliente->email) }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300"
                                   placeholder="Email del Cliente">
                        </div>

                        <div class="mb-4">
                            <label for="direccion" class="block text-gray-700 font-medium mb-2">Direccion</label>
                            <input type="text" id="direccion" name="direccion"
                                   value="{{ old('direccion', $cliente->direccion) }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300"
                                   placeholder="Direccion de Cliente">
                        </div>

                        <div class="flex space-x-4">
                            <button type="submit"
                                    class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                                Actualizar
                            </button>
                            <a href="{{ route('clientes.index') }}"
                               class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>


