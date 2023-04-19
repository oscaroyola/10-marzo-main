<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTA DE SISTEMAS DE MONITOREO</title>
</head>
<body>
    <div class="container">
                <div class="table">
                    <thead>
                        <td>ID</td>
                        <td>NOMBRE</td>
                        <td>DESCRIPCION</td>
                    </thead>
                    <hr>
                    <tbody>
                        @foreach ($Sistemas_monitoreo as $Sistema_monitoreo)
                        <tr>
                            <td>{{$Sistema_monitoreo->id}} </td>
                            <td>{{$Sistema_monitoreo->nombre}} </td>
                            <td>{{$Sistema_monitoreo->descripcion}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>