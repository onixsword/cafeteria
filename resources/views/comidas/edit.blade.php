<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Comida</h1>
    <a href="{{route('comidas.index')}}"><button>Volver al index</button></a>
    <br>
    <form method="POST" action="{{ route('comidas.update', array('comidas'=>$comida->comidaID)) }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT"> 
        <label>Nombre:</label>
        <input type="text" name="txtNombre" value="{{ $comida->nombre }}">
        <label>Precio:</label>
        <input type="text" name="txtPrecio" value="{{ $comida->precio }}">
        <button type="submit">Editar comida</button>
    </form>
</body>
</html>