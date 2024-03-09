<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto</title>
</head>
<body>
    <h1>Crear Producto</h1>
    <form method="POST" action="{{ route('producto.store') }}">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <label for="clase">Clase:</label>
        <select name="clase" id="clase">
            <option value="tornilleria">Tornillería</option>
            <option value="herramientas">Herramientas</option>
            <option value="cocina">Cocina</option>
            <option value="otros">Otros</option>
        </select>
        <label for="proveedor">Proveedor:</label>
        <input type="text" name="proveedor" id="proveedor">
        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" id="precio">
        <button type="submit">Crear Producto</button>
    </form>
</body>
</html>
