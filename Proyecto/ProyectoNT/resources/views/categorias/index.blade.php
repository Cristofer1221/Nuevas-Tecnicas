<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Categorías</title>
    <tr>
        <th>#</th>
        <th>Categoría</th>
    </tr>
    
</head>
<body>
<div class="container">
    @foreach ($categorias as $categoría)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $categoría->Nombre }}</td>
        <td>Editar | Borrar</td>
    </tr>
    <br>
    @endforeach
</div>
</body>
</html>