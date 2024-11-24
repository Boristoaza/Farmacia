@extends('index')
@section('title', 'Porveedores')
@section('content')

<div class="container-md shadow p-3 mb-3 bg-body-tertiary rounded">
  <div class="row g-2">
    <div>
      <h2>Información General</h2>
    </div>
    <div class="col-12 col-md-6">
      <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Nombre de la empresa</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">DeRazón social</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">RUC</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>
    <div class="col-12 col-md-6 mb-2">
      <select class="form-select" aria-label="Default select example">
        <option selected>Tipo de proveedor</option>
        <option value="1">bienes</option>
        <option value="2">servicios</option>
        <option value="3">mixto</option>
      </select>
    </div>
  </div>
</div>

<div class="container-md shadow p-3 mb-5 bg-body-tertiary rounded">
  <div class="row g-2">
    <div>
      <h2>Información de Contacto</h2>
    </div>
    <div class="col-12 col-md-6">
      <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Nombre del contacto principal</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Correo electrónico</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Teléfono</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Dirección</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>
  </div>
</div>
@endsection
