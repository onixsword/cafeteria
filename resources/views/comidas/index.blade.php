<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comidas</title>
</head>
<body>
    <h1>Comidas</h1>
    <button>Agregar Comidas</button>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comidas as $comida)
                <tr>
                    <td>{{$comida->nombre}}</td>
                    <td>{{$comida->precio}}</td>
                    <td><button>Editar</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>