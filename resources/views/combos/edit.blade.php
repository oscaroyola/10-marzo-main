<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=" {{asset('css/a.css')}}">
    <title>ACTUALIZAR COMBOS</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('combos.update', $Combo->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <table class="table table-sm table striped table-hover">
                        <tr>
                            <th>NOMBRE</th>
                            <th><input type="text" class="form-control" name="nombre" value="{{$Combo->nombre}}"></th>
                        </tr>
                        <tr>
                            <th>DESCRIPCION</th>
                            <th><textarea name="descripcion" id="" cols="30" rows="10" class="form-control"{{$Combo->descripcion}}"></textarea></th>
                        </tr>
                        <tr>
                            <th>PRODUCTO</th>
                            <th><input type="text" class="form-control" name="precio"value="{{$Combo->producto_id}}"></th>
                        </tr>
                        <tr>
                            <th>SISTEMA DE MONITOREO</th>
                            <th><input type="text" class="form-control" name="cantidad"value="{{$Combo->sistema_monitoreo_id}}"></th>
                        </tr>
                    </table>
                    <button class="btn btn-primary">ACTUALIZAR</button>
                    <a href="{{ route('combos')}}" class="btn btn-link">CANCELAR</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>