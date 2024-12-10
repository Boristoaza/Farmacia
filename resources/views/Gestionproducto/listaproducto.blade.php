<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="content mt-5">
        <h1 class="text-center mb-4">Lista de productos</h1>
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock Disponible</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Fecha creacion</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($producto as $key => $productos)
                <tr class="table-light">
                    <th scope="row">{{$key +1 }}</th>
                    <td>{{$productos->codigo}}</th>
                    <td>{{$productos->nombreproducto}}</td>
                    <td>{{$productos->descripcion}}</td>
                    <td>{{$productos->precio}}</td>
                    <td>{{$productos->stock}}</td>
                    <td>{{$productos->opciones}}</td>
                    <td>{{$productos->creacion}}</td>
                    <td>{{$productos->estado}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>