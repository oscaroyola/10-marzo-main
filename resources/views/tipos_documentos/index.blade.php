<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTA DE DOCUMENTOS</title>
</head>
<body>
    <div class="container">
                <div class="table">
                    <thead>
                        <td>ID</td>
                        <td>NOMBRE</td>
                    </thead>
                    <hr>
                    <tbody>
                        @foreach ($Tipos_documentos as $Tipo_documento)
                        <tr>
                            <td>{{$Tipo_documento->id}} </td>
                            <td>{{$Tipo_documento->nombre}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>