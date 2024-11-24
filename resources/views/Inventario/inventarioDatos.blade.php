@extends('index')
@section('title', 'inventario')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<br>
<div class="container-md shadow-ms">
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
<table class="table table table-striped">
  <thead>
    <tr class="bg-dark">
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">id</th>
      <th scope="col">id del pais </th>
    </tr>
  </thead>
  <tbody>
  @foreach($prueba as $ciudad)
    <tr>
      <th scope="row">1</th>
      <td>{{ $ciudad->nombre }}</td>
      <td>{{ $ciudad->id }}</td>
      <td>{{ $ciudad->pais_id }}</td>
    </tr>
  @endforeach
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

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