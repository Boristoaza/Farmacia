@extends('index')
@section('title', 'nuevoproducto')
@section('content')


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
@endsection
