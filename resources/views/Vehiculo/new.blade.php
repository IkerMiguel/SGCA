<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Añadir vehiculos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Añadir vehiculo') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg p-6">
                    <form method="POST" action="{{ route('vehiculos.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="marca" class="block text-gray-700 font-medium mb-2">Marca</label>
                            <input type="text" id="marca" name="marca"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300"
                                   placeholder="Marca del vehículo">
                        </div>

                        <div class="mb-4">
                            <label for="modelo" class="block text-gray-700 font-medium mb-2">Modelo</label>
                            <input type="text" id="modelo" name="modelo"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300"
                                   placeholder="Modelo del vehículo">
                        </div>

                        <div class="mb-4">
                            <label for="año" class="block text-gray-700 font-medium mb-2">Año</label>
                            <input type="number" id="año" name="año"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300"
                                   placeholder="Año de fabricación">
                        </div>

                        <div class="mb-4">
                            <label for="precio" class="block text-gray-700 font-medium mb-2">Precio</label>
                            <input type="number" step="0" id="precio" name="precio"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300"
                                   placeholder="Precio del vehículo">
                        </div>

                        <div class="mb-4">
                            <label for="kilometraje" class="block text-gray-700 font-medium mb-2">Kilometraje</label>
                            <input type="number" id="kilometraje" name="kilometraje"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300"
                                   placeholder="Kilometraje actual">
                        </div>

                        <div class="mb-4">
                            <label for="tipo" class="block text-gray-700 font-medium mb-2">Tipo</label>
                            <input type="text" id="tipo" name="tipo"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300"
                                   placeholder="Tipo">
                        </div>

                        <div class="flex space-x-4">
                            <button type="submit"
                                    class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                                Guardar
                            </button>
                            <a href="{{ route('vehiculos.index') }}"
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

