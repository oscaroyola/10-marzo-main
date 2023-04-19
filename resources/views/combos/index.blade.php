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
        <h1>LISTADO DE COMBOS</h1> 
        <a href="{{ route('combos.create')}}" class="btn btn-primary mt-7">CREAR NUEVO COMBO</a>
        <hr>  
        <table class="table">
            <thead>
                <td>ID</td>
                <td>DESCRIPCION</td>
                <td>PRODUCTOS</td>
                <td>SISTEMA DE MONITOREO</td>
                <td>ACCIONES</td>
            </thead>

            <tbody>
                @foreach ($Combos as $Combo)
                 <tr>
                    <td>{{ $Combo->id}}</td>
                    <td>{{ $Combo->descripcion}}</td>
                    <td>{{ $Combo->producto_id}}</td>
                    <td>{{ $Combo->sistema_monitoreo_id}}</td>
                    <td>
                        <form action="{{ route('combos.eliminar',$Combo->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('combos.show', $Combo->id)}}" class="btn btn-sm btn-info">DETALLES</a>
                            <a href="{{ route('combos.edit', $Combo->id)}}" class="btn btn-sm btn-warning">EDITAR</a>
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