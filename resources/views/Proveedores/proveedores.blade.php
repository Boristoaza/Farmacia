@extends('index')
@section('title', 'Proveedores')
@section('content')
<script src="{{asset('js/Proveedor/proveedor.js')}}"></script>
<form action="{{ url('proveedores') }}" method="POST">
  @csrf
  @if(session('exito'))
  <div class="alert alert-success">
    {{ session('exito') }}
  </div>
  @endif
  <div class="container bg-light rounded md-3 mb-4 ">
    <div class="row">
      <div class="contanier text-center mt-3 mb-3">
        <h3>Registrar Proveedores</h3>
      </div>
      <div class="col-12 col-md-4 mb-4 ">
        <input type="text" class="form-control" name="nombre_de_la_empresa" placeholder="nombre la empresa" required>
      </div>
      <div class="col-12 col-md-4 mb-4 ">
        <input type="text" class="form-control" name="tipo_proveedor" placeholder="tipo proveedor" required>
      </div>
      <div class="col-12 col-md-4 mb-4">
        <input type="text" class="form-control" name="ruc" placeholder="Ruc" required>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-4 mb-4">
        <input type="text" class="form-control" name="telefono" placeholder="telefono" required>
      </div>
      <div class="col-12 col-md-4 mb-4">
        <input type="email" class="form-control" name="email" placeholder="email" required>
      </div>
      <div class="col-12 col-md-4 mb-4">
        <input type="text" class="form-control" name="direccion" placeholder="direccion" required>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-4 mb-4">
        <input type="text" class="form-control" name="cuenta_bancaria" placeholder="cuenta bancaria" required>
      </div>
      <div class="col-12 col-md-4 mb-4">
        <input type="text" class="form-control" name="banco" placeholder="banco" required>
      </div>
      <div class="col-12 col-md-4 mb-4">
        <input type="text" class="form-control" name="tipo_cuenta" placeholder="tipo cuenta" required>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-4 mb-4">
        <input type="text" class="form-control" name="condiciones_pago" placeholder="condiciones pago" required>
      </div>
      <div class="col-12 col-md-4 mb-4">
        <button type="submit" class="btn btn-primary w-100" >Guardar</button>
      </div>
    </div>
  </div>

 <!-- buscador  -->
<div class="container-fluid bg-light md-3 shadow p-3 mb-5 bg-body-tertiary rounded table-hover mt-3 mb-3">
  <div class="row">
    <div class="col-12 col-md-4 mb-4">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" id="datoBuscador">
      </form>
    </div>
    <div class="col-12 col-md-4 mb-4">
      <button class="btn btn-outline-success" type="submit" id="BuscarPorveedor" data-url="{{route('proveedor.BuscarPorveedor')}}" >Buscar</button>
    </div>
  </div>

  <!-- Tabla responsiva -->
  <div class="table-responsive">
    <table class="table  table-hover">
      <thead>
        <tr>
          <!-- <th scope="col">#</th> -->
          <th scope="col">Nombre de la empresa</th>
          <th scope="col">Ruc</th>
          <th scope="col">Telefono</th>
          <th scope="col">Email</th>
          <th scope="col">Direccion</th>
          <th scope="col">Cuenta bancaria</th>
          <th scope="col">Bunco</th>
          <th scope="col">Cuenta bancaria</th>
          <th scope="col">Condicicones de pago</th>
        </tr>
      </thead>
      <tbody>
        @foreach($Datos as $dato)
        <tr>
          <td>{{$dato->nombre_de_la_empresa}}</td>
          <td>{{$dato->ruc}}</td>
          <td>{{$dato->telefono}}</td>
          <td>{{$dato->email}}</td>
          <td>{{$dato->direccion}}</td>
          <td>{{$dato->cuenta_bancaria}}</td>
          <td>{{$dato->banco}}</td>
          <td>{{$dato->tipo_cuenta}}</td>
          <td>{{$dato->condiciones_pago}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>

</form>
@endsection