@extends('index')
@section('title', 'Facturacion')
@section('content')
<script src="{{ asset('js/ArchivosJS/facturacion.js') }}"></script>
<div class="container-text-center shadow p-3 mb-5 bg-body rounded">
  <div class="container mt-4">
    <div class="row g-4 align-items-center">
      <div class="text-center mb-4">
        <h2>Facturacion</h2>
      </div>
      <!-- Columna 1 -->
      <div class="col-12 col-md-4">
        <label for="seleccionarEstablecimiento" class="form-label">Establecimiento</label>
        <select class="form-select" id="seleccionarEstablecimiento">
          <option selected disabled>Seleccione el establecimiento</option>
          <option value="001 Mapasingue">001 Mapasingue</option>
          <option value="002 Manta">002 Manta</option>
          <option value="003 Urdesa">003 Urdesa</option>
        </select>
      </div>

      <!-- Columna 2 -->
      <div class="col-12 col-md-4">
        <label for="fecha-emision" class="form-label">Fecha de Emisión</label>
        <input class="form-control styled-date" type="date" name="fecha-emision" id="fecha-emision">
      </div>

      <!-- Columna 3 -->
      <div class="col-12 col-md-4">
        <label for="puntoEmison" class="form-label">Punto de Emisión</label>
        <select class="form-select" id="puntoEmison">
          <option value="" selected disabled>Seleccione un punto</option>
          <option value="1">001</option>
          <option value="2">002</option>
          <option value="3">003</option>
        </select>
      </div>

      <!-- Columna 4 -->
      <div class="col-12 col-md-4">
        <label for="guia-remision" class="form-label">Guía de Remisión</label>
        <input type="text" class="form-control" id="guia-remision" placeholder="Ingrese la guía de remisión">
      </div>

      <!-- Columna 5 -->
      <div class="col-12 col-md-4">
        <label for="facturaComercial" class="form-label">Factura Comercial</label>
        <input class="form-control" type="text" id="facturaComercial" placeholder="Ingrese la factura comercial">
      </div>

      <!-- Columna 6 -->
      <div class="col-12 col-md-4">
        <div class="form-check form-switch" style="padding-top: 10px;">
          <input class="form-check-input" type="checkbox" id="factura-comercial">
          <label class="form-check-label" for="factura-comercial">Confirmar Factura Comercial</label>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container p-4 border rounded bg-light shadow-sm">
          <div class="row mb-3">
            <div class="col">
              <label for="codigo" class="form-label">Código</label>
              <input type="text" id="codigo" class="form-control" placeholder="Ingrese el código">
            </div>
            <div class="col">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" id="nombre" class="form-control" placeholder="Ingrese el nombre">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="precio" class="form-label">Precio unitario</label>
              <input type="text" id="precio" class="form-control" placeholder="Ingrese el precio">
            </div>
            <div class="col">
              <label for="info-adicional" class="form-label">Información adicional</label>
              <input type="text" id="info-adicional" class="form-control" placeholder="Detalles adicionales">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="tarifa-iva" class="form-label">Tarifa IVA</label>
              <select id="tarifa-iva" class="form-select">
                <option selected>Elegir impuesto</option>
                <option value="1">15%</option>
              </select>
            </div>
            <div class="col">
              <div class="form-check form-switch mt-4">
                <input class="form-check-input" type="checkbox" id="iva-turismo">
                <label for="iva-turismo" class="form-check-label">Aplica tarifa IVA turismo</label>
              </div>
              <div class="form-check form-switch mt-2">
                <input class="form-check-input" type="checkbox" id="ice">
                <label for="ice" class="form-check-label">ICE</label>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div>
  </div>
</div>
</div>

<div class="container table-responsive mt-4 shadow p-1  bg-body rounded">
  <div class="text-center mb-4">
    <h2>Mis servicios y productos</h2>
  </div>
  <nav class="navbar navbar-light bg-light mb-3">
    <div class="container-fluid">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Código" aria-label="Search">
        <button class="btn btn-secondary mx-2" type="submit">Buscar</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          nuevo
        </button>
      </form>
    </div>
  </nav>
  <table class="table table-striped table-hover table-bordered">
    <thead class="table-dark">
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nombre</th>
        <th scope="col">Valor</th>
        <th scope="col">IVA</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Servicio A</td>
        <td>$100.00</td>
        <td>12%</td>
        <td>
          <button class="btn btn-warning btn-sm">Editar</button>
          <button class="btn btn-danger btn-sm">Eliminar</button>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Producto B</td>
        <td>$50.00</td>
        <td>12%</td>
        <td>
          <button class="btn btn-warning btn-sm">Editar</button>
          <button class="btn btn-danger btn-sm">Eliminar</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection()