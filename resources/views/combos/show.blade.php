<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=" {{asset('css/a.css')}}">
    <title>LISTAR COMBOS</title>
</head>

<body>
    <div class="container">    
        <div class="row">
            <div class="cold-md-12">
                <table class="table">
                    <tr>
                        <th>NOMBRE</th>
                        <td>{{ $Combo->nombre}}</td>
                    </tr>
                    <tr>
                        <th>DESCRIPCION</th>
                        <td>{{ $Combo->descripcion}}</td>
                    </tr>
                    <tr>
                        <th>PRODUCTO</th>
                        <td>{{ $Combo->producto_id}}</td>
                    </tr>
                    <tr>
                        <th>SISTEMA DE MONITOREO</th>
                        <td>{{ $Combo->sistema_monitoreo_id}}</td>
                    </tr>
                </table>
                <a href="{{ route('combos')}}" class="btn btn-primary">IR A INICIO</a>
            </div>  
        </div>
    </div>
</body>

</html>