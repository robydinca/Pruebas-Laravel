<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form method="POST" action="{{ route('producto.update', $producto->id) }}">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}">
        <label for="clase">Clase:</label>
        <select name="clase" id="clase">
            <option value="tornilleria" {{ $producto->clase == 'tornilleria' ? 'selected' : '' }}>Tornillería</option>
            <option value="herramientas" {{ $producto->clase == 'herramientas' ? 'selected' : '' }}>Herramientas</option>
            <option value="cocina" {{ $producto->clase == 'cocina' ? 'selected' : '' }}>Cocina</option>
            <option value="otros" {{ $producto->clase == 'otros' ? 'selected' : '' }}>Otros</option>
        </select>
        <label for="proveedor">Proveedor:</label>
        <input type="text" name="proveedor" id="proveedor" value="{{ $producto->proveedor }}">
        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" id="precio" value="{{ $producto->precio }}">
        <button type="submit">Actualizar Producto</button>
    </form>
</body>
</html>
