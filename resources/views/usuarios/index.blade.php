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
        <h1>LISTADO DE USUARIOS</h1>
        <a href="{{ route('usuarios.create')}}" class="btn btn-primary mt-7">CREAR NUEVO USUARIO</a>
        <hr>
        <table class="table">
            <thead>
                <td>ID</td>
                <td>NOMBRES</td>
                <td>APELLIDOS</td>
                <td>CORREO</td>
                <td>CONTRASEÑA</td>
                <td>EDAD</td>
                <td>NUMERO DE DOCUMENTO</td>
                <td>TIPO DE DOCUMENTO</td>
                <td>GENERO</td>
                <td>ROL</td>
                <td>ACCIONES</td>
            </thead>

            <tbody>
                @foreach ($Usuarios as $Usuario)
                 <tr>
                    <td>{{ $Usuario->id}}</td>
                    <td>{{ $Usuario->nombres}}</td>
                    <td>{{ $Usuario->apellidos}}</td>
                    <td>{{ $Usuario->correo}}</td>
                    <td>{{ $Usuario->contraseña}}</td>
                    <td>{{ $Usuario->edad}}</td>
                    <td>{{ $Usuario->numero_de_documento}}</td>
                    <td>{{ $Usuario->tipo_de_documento_id}}</td>
                    <td>{{ $Usuario->genero_id}}</td>
                    <td>{{ $Usuario->rol_id}}</td>
                    <td>
                        <form action="{{ route('usuarios.eliminar',$Usuario->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('usuarios.show', $Usuario->id)}}" class="btn btn-sm btn-info">DETALLES</a>
                            <a href="{{ route('usuarios.edit', $Usuario->id)}}" class="btn btn-sm btn-warning">EDITAR</a>
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