@extends('index')
@section('title', 'inventario')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
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
<div class="container-md align-items-end">
  <table class="table table-striped table-bordered shadow p-3 mb-5 bg-body rounded">
    <thead class="bg-dark">
      <tr class="bg-dark text-white">
        <th scope="col" class="bg-dark text-white"  style="font-size: small;">ID del Producto</th>
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