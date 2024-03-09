<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Productos</title>
</head>
<body>
    <h1>Listado de Productos</h1>
    <ul>
        @foreach($productos as $producto)
            <li>{{ $producto->nombre }} - {{ $producto->clase }} - {{ $producto->proveedor }} - ${{ $producto->precio }}</li>
        @endforeach
    </ul>
</body>
</html>
