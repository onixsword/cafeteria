<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Borrar Comida</h1>
    <a href="{{route('comidas.index')}}"><button>Volver al index</button></a>
    <br>
    <form method="POST" action="{{ route('comidas.destroy', array('comidas'=>$comida->comidaID)) }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE"> 
        <label>Nombre:</label>
        <input type="text" name="txtNombre" value="{{ $comida->nombre }}" readonly>
        <label>Precio:</label>
        <input type="text" name="txtPrecio" value="{{ $comida->precio }}" readonly>
        <button type="submit">Borrar comida</button>
    </form>
</body>
</html>