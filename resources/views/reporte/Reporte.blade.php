@extends('index')
@section('title', 'Reporte')
@section('content')

<title>Gráfico</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="container text-center">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
      <div class="shadow p-3 mb-5 bg-body rounded">
        <canvas id="ventaChart" style="max-width: 100%; height: 220px;"></canvas>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
      <div class="shadow p-3 mb-5 bg-body rounded">
        <canvas id="productosChart" style="max-width: 100%; height: 220px;"></canvas>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
      <div class="shadow p-3 mb-5 bg-body rounded">
        <canvas id="tendenciasChart" style="max-width: 100%; height: auto;"></canvas>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
      <div class="shadow p-3 mb-5 bg-body rounded">
        <canvas id="inventarioChart" style="max-width: 100%; height: auto;"></canvas>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('js/charts/chart.js') }}"></script>
@endsection
