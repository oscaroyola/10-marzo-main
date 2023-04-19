<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=" {{asset('css/a.css')}}">
    <title>LISTAR USUARIOS</title>
</head>

<body>
    <div class="container">    
        <div class="row">
            <div class="cold-md-12">
                <table class="table">
                    <tr>
                        <th>NOMBRES</th>
                        <td>{{ $Usuario->nombres}}</td>
                    </tr>
                    <tr>
                        <th>APELLIDOS</th>
                        <td>{{ $Usuario->apellidos}}</td>
                    </tr>
                    <tr>
                        <th>CORREO</th>
                        <td>{{ $Usuario->correo}}</td>
                    </tr>
                    <tr>
                        <th>CONTRASEÑA</th>
                        <td>{{ $Usuario->contraseña}}</td>
                    </tr>
                    <tr>
                        <th>EDAD</th>
                        <td>{{ $Usuario->edad}}</td>
                    </tr>
                    <tr>
                        <th>NUMERO DE DOCUMENTO</th>
                        <td>{{ $Usuario->numero_de_documento}}</td>
                    </tr>
                    <tr>
                        <th>TIPO DE DOCUMENTO</th>
                        <td>{{ $Usuario->tipo_de_documento_id}}</td>
                    </tr>
                    <tr>
                        <th>GENERO</th>
                        <td>{{ $Usuario->genero_id}}</td>
                    </tr>
                    <tr>
                        <th>ROL</th>
                        <td>{{ $Usuario->rol_id}}</td>
                    </tr>
                </table>
                <a href="{{ route('usuarios')}}" class="btn btn-primary">IR A INICIO</a>
            </div>  
        </div>
    </div>
</body>

</html>