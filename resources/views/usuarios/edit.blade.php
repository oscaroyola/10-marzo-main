<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=" {{asset('css/a.css')}}">
    <title>EDITAR USUARIOS</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('usuarios.update', $Usuario->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <table class="table table-sm table striped table-hover">
                        <tr>
                            <th>NOMBRES</th>
                            <th><input type="text" class="form-control" name="nombres" value="{{$Usuario->nombre}}"></th>
                        </tr>
                        <tr>
                            <th>APELLIDOS</th>
                            <th><input type="text" class="form-control" name="apellidos" value="{{$Usuario->apelllidos}}"></th>
                        </tr>
                        <tr>
                            <th>CORREO</th>
                            <th><input type="text" class="form-control" name="correo"value="{{$Usuario->correo}}"></th>
                        </tr>
                        <tr>
                            <th>CONTRASEÑA</th>
                            <th><input type="text" class="form-control" name="contraseña"value="{{$Usuario->contraseña}}"></th>
                        </tr>
                        <tr>
                            <th>EDAD</th>
                            <th><input type="text" class="form-control" name="edad"value="{{$Usuario->edad}}"></th>
                        </tr>
                        <tr>
                            <th>NUMERO DE DOCUMENTO</th>
                            <th><input type="text" class="form-control" name="numero de documento"value="{{$Usuario->numero_de_documento}}"></th>
                        </tr>
                        <tr>
                            <th>TIPO DE DOCUMENTO</th>
                            <th><input type="text" class="form-control" name="tipo de documento"value="{{$Usuario->tipo_de_documento_id}}"></th>
                        </tr>
                        <tr>
                            <th>GENERO</th>
                            <th><input type="text" class="form-control" name="genero"value="{{$Usuario->genero_id}}"></th>
                        </tr>
                        <tr>
                            <th>ROL</th>
                            <th><input type="text" class="form-control" name="rol"value="{{$Usuario->rol_id}}"></th>
                        </tr>
                    </table>
                    <button class="btn btn-primary">ACTUALIZAR</button>
                    <a href="{{ route('usuarios')}}" class="btn btn-link">CANCELAR</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>