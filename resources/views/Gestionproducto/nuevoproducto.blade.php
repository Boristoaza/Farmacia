<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container-xl mt-4 card" style="height: 530px;">
        <h1 class="text-center" style="font-size: 30px;">Nuevo Producto</h1>
        <form action="/enviarproducto" method="POST">
            @csrf

           <div class="row">
                <div class="mb-3 col-2">
                    <label for="codigo" class="form-label">Id</label>
                    <input type="number" class="form-control" id="codigo" name="codigo" required>
                </div>

                <div class="mb-3 col-4">
                    <label for="nombreproducto" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control" id="nombreproducto" name="nombreproducto" required>
                </div>
                
                <div class="mb-3 col-6">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                </div>
           </div>
            
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="precio" name="precio" required>
                </div>

                <div class="mb-3 col-6">
                    <label for="stock" class="form-label">Stock Disponible</label>
                    <input type="number" class="form-control" id="stock" name="stock" required>
                </div>
            </div>


            <div class="mb-3">
                <label for="opciones" class="form-label">Categoria de producto</label>
                <select id="opciones" class="form-select" name="opciones" required>
                    <option>Tecnologia</option>
                    <option>Medicina</option>
                    <option>instrumentos musicales</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="creacion" class="form-label">Fecha creacion</label>
                <input type="date" class="form-control" id="creacion" name="creacion" required>
            </div>

            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <select id="estado" class="form-select" name="estado" required>
                    <option>Activo</option>
                    <option>Inactivo</option>
                </select>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Registrar producto</button>
            </div>

        </form>
    </div>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>