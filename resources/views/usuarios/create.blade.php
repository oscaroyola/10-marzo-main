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
        <h1>CREAR UN NUEVO USUARIO</h1>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('usuarios.guardar')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">NOMBRES</label>
                                <input type="text" class="form-control" name="nombres">
                            </div>
                            <div class="form-group">
                                <label for="">APELLIDOS</label>
                                <input type="text" class="form-control" name="apellidos">
                            </div>
                            <div class="form-group">
                                <label for="">CORREO</label>
                                <input type="text" class="form-control" name="correo">
                            </div>
                            <div class="form-group">
                                <label for="">CONTRASEÑA</label>
                                <input type="text" class="form-control" name="contraseña">
                            </div>
                            <div class="form-group">
                                <label for="">EDAD</label>
                                <input type="text" class="form-control" name="edad">
                            </div>
                            <div class="form-group">
                                <label for="">NUMERO DE DOCUMENTO</label>
                                <input type="text" class="form-control" name="numero_de_documento">
                            </div><div class="form-group">
                                <label for="">TIPO DE DOCUMENTO</label>
                                <input type="text" class="form-control" name="tipo_de_documento_id">
                            </div><div class="form-group">
                                <label for="">GENERO</label>
                                <input type="text" class="form-control" name="genero_id">
                            </div>
                            <div class="form-group">
                                <label for="">ROL</label>
                                <input type="text" class="form-control" name="rol_id">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">GUARDAR</button>
                            <a href="{{ route('usuarios.index')}}" class="btn btn-link">CANCELAR</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>