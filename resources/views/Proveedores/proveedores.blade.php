@extends('index')
@section('title', 'Proveedores')
@section('content')
<form action="{{ url('proveedores') }}" method="POST">
  @csrf
  @if(session('exito'))
  <div class="alert alert-success">
    {{ session('exito') }}
  </div>
  @endif
  <div class="container bg-light rounded md-3 mb-4">
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
        <button type="submit" class="btn btn-primary w-100">Guardar</button>
      </div>
    </div>
  </div>
</form>
@endsection