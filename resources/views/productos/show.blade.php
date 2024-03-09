<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle del Producto</title>
</head>
<body>
    <h1>Detalle del Producto</h1>
    <p>Nombre: {{ $producto->nombre }}</p>
    <p>Clase: {{ $producto->clase }}</p>
    <p>Proveedor: {{ $producto->proveedor }}</p>
    <p>Precio: ${{ $producto->precio }}</p>
</body>
</html>
