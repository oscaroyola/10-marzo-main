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
        <h1>CREAR UN NUEVO PRODUCTO</h1>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('productos.guardar')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">NOMBRE</label>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="">TIPO</label>
                                <input type="text" class="form-control" name="tipo">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="">PRECIO</label>
                                    <input type="double" class="form-control" name="precio">
                                </div>
                                <label for="">DESCRIPCION</label>
                                <textarea class="form-control" name="descripcion"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">CANTIDAD</label>
                                <input type="text" class="form-control" name="cantidad">
                            </div>
                            <div class="form-group">
                                <label for="">ESTADO</label>
                                <input type="text" class="form-control" name="estado">
                            </div>
                            <div class="form-group">
                                <label for="">IMAGEN</label>
                                <textarea class="form-control" name="imagen"></textarea><img src="" alt="">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">GUARDAR</button>
                            <a href="{{ route('productos')}}" class="btn btn-link">CANCELAR</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>