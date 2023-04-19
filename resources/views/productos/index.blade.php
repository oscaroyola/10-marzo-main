<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=" {{asset('css/a.css')}}">
    
    <title>LISTAR PRODUCTOS</title>
</head>

<body>
    <div class="container">
        <h1>LISTADO DE PRODUCTOS</h1>
        <a href="{{ route('productos.create')}}" class="btn btn-primary mt-7">CREAR NUEVO PRODUCTO</a>
        <hr>
        <table class="table">
            <thead>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>TIPO</td>
                <td>PRECIO</td>
                <td>DESCRIPCION</td>
                <td>CANTIDAD</td>
                <td>ESTADO</td>
                <td>IMAGEN</td>
                <td>ACCIONES</td>
            </thead>

            <tbody>
                @foreach ($Productos as $Producto)
                 <tr>
                    <td>{{ $Producto->id}}</td>
                    <td>{{ $Producto->nombre}}</td>
                    <td>{{ $Producto->tipo}}</td>
                    <td>{{ $Producto->precio}}</td>
                    <td>{{ $Producto->descripcion}}</td>
                    <td>{{ $Producto->cantidad}}</td>
                    <td>{{ $Producto->estado}}</td>
                    <td><img src="{{ $Producto->imagen}}" alt="10px" width="100px"></td>
                    <td>
                        <form action="{{ route('productos.eliminar',$Producto->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('productos.show', $Producto->id)}}" class="btn btn-sm btn-info">DETALLES</a>
                            <a href="{{ route('productos.edit', $Producto->id)}}" class="btn btn-sm btn-warning">EDITAR</a>
                            <button type="submit" class="btn btn-sm btn-danger">ELIMINAR</button>
                        </form>
                    </td>
                </tr>   
                @endforeach
            </tbody> 
        </table>
        
    </div>
</body>

</html>