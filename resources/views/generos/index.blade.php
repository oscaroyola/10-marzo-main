<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTA DE ROLES</title>
</head>
<body>
    <div class="container">
                <div class="table-responsive">
                    <thead>
                        <td>ID</td>
                        <td>NOMBRE</td>
                    </thead>
                    <hr>
                    <tbody>
                        @foreach ($Generos as $Genero)
                        <tr>
                            <td>{{$Genero->id}} </td>
                            <td>{{$Genero->nombre}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>