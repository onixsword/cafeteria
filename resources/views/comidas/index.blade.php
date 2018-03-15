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

    @if ($exito != null)
        @if($exito == 1)
            <p>Se ha agregado una comida</p>
        @else
            <p>No se ha agregado ninguna comida</p>
        @endif
    @endif
    <a href="{{ route('comidas.create' )}}">
        <button>Agregar Comidas</button>
    </a>
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
                    <td>
                        <a href="{{ route('comidas.edit', $comida->comidaID )}}">
                            <button>Editar</button>
                        </a>
                        <a href="{{ route('comidas.delete', $comida->comidaID )}}">
                            <button>Eliminar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>