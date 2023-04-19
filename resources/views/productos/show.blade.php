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
        <div class="row">
            <div class="cold-md-12">
                <table class="table">
                    <tr>
                        <th>NOMBRE</th>
                        <td>{{ $Producto->nombre}}</td>
                    </tr>
                    <tr>
                        <th>TIPO</th>
                        <td>{{ $Producto->tipo}}</td>
                    </tr>
                    <tr>
                        <th>PRECIO</th>
                        <td>{{ $Producto->precio}}</td>
                    </tr>
                    <tr>
                        <th>DESCRIPCION</th>
                        <td>{{ $Producto->descripcion}}</td>
                    </tr>
                    <tr>
                        <th>CANTIDAD</th>
                        <td>{{ $Producto->cantidad}}</td>
                    </tr>
                    <tr>
                        <th>ESTADO</th>
                        <td>{{ $Producto->estado}}</td>
                    </tr>
                    <tr>
                        <th>IMAGEN</th>
                        <td>{{ $Producto->imagen}}</td>
                    </tr>
                </table>
                <a href="{{ route('productos')}}" class="btn btn-primary">IR A INICIO</a>
            </div>  
        </div>
    </div>
</body>

</html>