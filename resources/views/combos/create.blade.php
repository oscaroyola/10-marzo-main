<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=" {{asset('css/a.css')}}">
    <title>CREAR COMBOS</title>
</head>

<body>
    <div class="container">    
        <h1>CREAR UN COMBO NUEVO</h1>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('combos.guardar')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">NOMBRE</label>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="">DESCRIPCION</label>
                                <input type="text" class="form-control" name="descripcion">
                            </div>
                            <div class="form-group">
                                <label for="">PRODUCTO</label>
                                <input type="text" class="form-control" name="producto_id">
                            </div>
                            <div class="form-group">
                                <label for="">SISTEMA DE MONITOREO</label>
                                <input type="text" class="form-control" name="sistema_monitoreo_id">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">GUARDAR</button>
                            <a href="{{ route('combos')}}" class="btn btn-link">CANCELAR</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>