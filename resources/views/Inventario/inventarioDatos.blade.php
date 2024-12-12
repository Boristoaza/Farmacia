@extends('index')
@section('title', 'inventario')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<script src="{{ asset('public/jule.js')}}" defer></script>
<br>
<div class="container-md shadow-ms mb-2">
  <div class="row">
    <div class="col-sm-3">
      <div class="card bg-light" style="height: 10rem;">
        <div class="card-body text-center">
          <i class="bi bi-receipt" style="font-size: 2rem;"></i>
          <br>
          <h5 class="card-title mt-3">Ventas del día</h5>
          <p class="card-text">100 ventas</p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card bg-light" style="height: 10rem;">
        <div class="card-body text-center">
          <i class="bi bi-exclamation-diamond" style="font-size:2rem;"></i>
          <br>
          <h5 class="card-title text-center">Productos próximos a vencer</h5>
          <p class="card-text text-center">20 proximos a vencer</p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card bg-light" style="height: 10rem;">
        <div class="card-body text-center">
          <i class="bi bi-box-seam" style="font-size: 2rem;"></i>
          <h5 class="card-title text-center">Stock bajo</h5>
          <p class="card-text">40</p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card bg-light" style="height: 10rem;">
        <div class="card-body text-center">
          <i class="bi bi-person-check" style="font-size: 2rem;"></i>
          <h5 class="card-title text-center">Total de clientes registrados</h5>
          <p class="card-text text-center">40 clientes registrados</p>
        </div>
      </div>
    </div>
  </div>
</div>
<br>

<div class="container shadow p-3 mb-5 bg-body-tertiary rounded table-hover mt-3 mb-3 ">
  <div class="row g-3 mb-3">
    <h2>Registrar nuevo producto</h2>
    <div class="col-12 col-md-4 mb-4">
      <input type="text" class="form-control" placeholder="Nombre del Producto" id="nombreDelProducto">
    </div>
    <div class="col-12 col-md-4 mb-4 ">
      <input type="text" class="form-control" placeholder="Categoría" id="categoría">
    </div>
    <div class="col-12 col-md-4 mb-4 ">
      <input type="text" class="form-control" placeholder="Cantidad en Stock" id="cantidadEnStock">
    </div>
  </div>
  <div class="row g-3">
    <div class="col-12 col-md-4 mb-4">
      <input type="text" class="form-control" placeholder="Precio de Compra" id="precioDeCompra" >
    </div>
    <div class="col-12 col-md-4 mb-4">
      <input type="text" class="form-control" placeholder="Precio de Venta" id="precioDeVenta">
    </div>
    <div class="col-12 col-md-4 mb-4">
      <input type="text" class="form-control" placeholder="Proveedor" id="proveedor">
    </div>
  </div>
  <div class="row">
    <button type="submit" class="btn btn-primary" id="registrarPoducto"> Registrar </button>
  </div>
</div>
<br>
<script>
$(documenta).ready(function() {
  $('#BuscadorInventario').click(function() {
    const dato = $('#InputInventario').val();
    $.ajax({
      url: '{{route("donde.estaMiInventario")}}',
      method: 'POST',
      data: {
        BuscadorInventario: dato,
      },
      header: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(respuesta) {
        console.log(respuesta);
        alert('Éxito en el envío de datos: ' + JSON.stringify(respuesta['datos del query realizado']));
      },
      error: function(xhr, status, error) {
        alert('Error fatal')
      }
    });
  });
});

$(document).ready(function() {
  $('#eliminarElementoInventario').click(function() {
    const dato = $('#InputInventario').val();
    $.ajax({
      url: '{{route("eliminar.dato")}}',
      method: 'POST',
      data: {
        eliminarDatoInventario: dato
      },
      header: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(respuesta) {
        console.log(respuesta);
        alert('se enviaoron los datos a ser eliminados' + JSON.stringify(respuesta[
          'datos de la eliminacion']))
      },
      error: function(xhr, status, error) {
        alert('error faltal');
      }
    });
  });
});
</script>

<div class="container-md align-items-end">
  <div class="container bg-dark md-3 shadow p-3 mb-5 bg-body-tertiary rounded table-hover mt-3 mb-3 ">
    <div class="row ">
      <div class="col-12 col-md-4 mb-4">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" id="InputInventario" placeholder="Buscar en inventario..."
            aria-label="Buscar">
          <button class="btn btn-outline-success" type="submit" id="BuscadorInventario">
            Buscar
          </button>
          <button class="btn btn-outline-success " style="margin-left: 10px;" type="submit"
            id="eliminarElementoInventario">Eliminar</button>
        </form>
      </div>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead class="bg-dark">
            <tr class="bg-dark text-white shadow">
              <th scope="col" class="bg-dark text-white" style="font-size: small;">ID del Producto</th>
              <th scope="col" style="font-size: small;">Nombre del Producto</th>
              <th scope="col" style="font-size: small;">Categoría</th>
              <th scope="col" style="font-size: small;">Cantidad en Stock</th>
              <th scope="col" style="font-size: small;">Precio de Compra</th>
              <th scope="col" style="font-size: small;">Precio de Venta</th>
              <th scope="col" style="font-size: small;">Proveedor</th>
              <th scope="col" style="font-size: small;">Fecha de Registro</th>
              <th scope="col" style="font-size: small;">Estado del Producto</th>
            </tr>
          </thead>
          <tbody>
            @foreach($Producto as $producto)
            <tr>
              <td>{{ $producto->id}}</td>
              <td>{{ $producto->nombre_producto }}</td>
              <td>{{ $producto->categoria }}</td>
              <td>{{ $producto->cantidad_stock }}</td>
              <td>{{ $producto->precio_compra }}</td>
              <td>{{ $producto->precio_venta }}</td>
              <td>{{ $producto->proveedor }}</td>
              <td>{{ $producto->proveedor }}</td>
              <td>{{ $producto->proveedor }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>
<div>
  @endsection