<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<div class="cointaner-fluid">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">

                <a class="btn btn-primary" href="{{ route('company.index') }}">Compañia</a>
                <a class="btn btn-primary" href="{{ route('product_type.index') }}">Tipo de productos</a>
                <a class="btn btn-primary" href="{{route('product.index')}}">Productos</a>
            </div>
        </div>
    </div>
</div>


</body>
</html>
