<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('ventas') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <a href="{{ route('ventas.create') }}"
                            class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded ml-2">
                            Add
                        </a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Marca de vehiculo</th>
                                    <th>Cliente</th>
                                    <th>Fecha de venta</th>
                                    <th>Precio total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ventas as $venta)
                                    <tr>
                                        <td>{{ $venta->id }}</td>
                                        <td>{{ $venta->vehiculo_marca }}</td>
                                        <td>{{ $venta->cliente_nombre }}</td>
                                        <td>{{ $venta->fecha_venta }}</td>
                                        <td>{{ $venta->precio_final }}</td>
                                        <td>
                                            <a href="{{ route('ventas.edit', ['venta' => $venta->id]) }}"
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                 Edit
                                             </a>
                                            <form
                                                action="{{ route('ventas.destroy', ['venta' => $venta->id]) }}"
                                                method="POST" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Delete"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
