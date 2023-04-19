<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=" {{asset('css/a.css')}}">
    <title>ACTUALIZAR PRODUCTO</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('productos.update', $Producto->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <table class="table table-sm table striped table-hover">
                        <tr>
                            <th>NOMBRE</th>
                            <th><input type="text" class="form-control" name="nombre" value="{{$Producto->nombre}}"></th>
                        </tr>
                        <tr>
                            <th>TIPO</th>
                            <th><input type="text" class="form-control" name="tipo" value="{{$Producto->tipo}}"></th>
                        </tr>
                        <tr>
                            <th>PRECIO</th>
                            <th><input type="double" class="form-control" name="precio" value="{{$Producto->precio}}"></th>
                        </tr>
                        <tr>
                            <th>DESCRIPCION</th>
                            <th><input class="form-control" name="descripcion" value="{{$Producto->descripcion}}"></th>
                        </tr>
                        <tr>
                            <th>CANTIDAD</th>
                            <th><input type="text" class="form-control" name="cantidad"value="{{$Producto->cantidad}}"></th>
                        </tr>
                        <tr>
                            <th>ESTADO</th>
                            <th><input type="text" class="form-control" name="estado"value="{{$Producto->estado}}"></th>
                        </tr>
                        <tr>
                            <th>IMAGEN</th>
                            <th><input type="text" class="form-control" name="imagen"value="{{$Producto->imagen}}"></th>
                        </tr>
                    </table>
                    <button class="btn btn-primary">ACTUALIZAR</button>
                    <a href="{{ route('productos')}}" class="btn btn-link">CANCELAR</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>