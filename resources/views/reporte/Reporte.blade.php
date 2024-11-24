@extends('index')
@section('title' , 'Reporte')
@section('content')
 <div class="container-xl mt-4  shadow p-3 mb-5 bg-body-tertiary rounded">
  <div class="row g-3">
    <div class="col-sm-6">
      <div class="chart-container">
        <canvas id="myChart"></canvas>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="chart-container">
        <canvas id="ProductosVendidos"></canvas>
      </div>
    </div>
  </div>
  <div class="row g-3">
    <div class="col-sm-6">
      <div class="chart-container">
        <canvas id="tendenciasDeVentas"></canvas>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="chart-container">
        <canvas id="inventarioPorCategoria"></canvas>
      </div>
    </div>
  </div>
</div>

 <style>
.chart-container {
  width: 100%;
  /* Asegura que los gráficos ocupen todo el ancho disponible */
  height: 200px;
  /* Altura de los gráficos */
  margin: 10px auto;
  /* Espaciado entre gráficos */
}
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Gráfico de barras - Ventas por mes
const ctx = document.getElementById('myChart');
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
      label: 'Ventas por mes',
      data: [12, 19, 3, 5, 2, 3],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

const chartElement = document.getElementById('ProductosVendidos');
const data = {
  labels: ['Red', 'Blue', 'Yellow'],
  datasets: [{
    label: 'Productos más vendidos',
    data: [300, 50, 100],
    backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)'],
    hoverOffset: 4
  }]
};
new Chart(chartElement, {
  type: 'doughnut',
  data: data
});

const chartElementline = document.getElementById('tendenciasDeVentas');
const labels = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'];
const dataVentas = {
  labels: labels,
  datasets: [{
    label: 'Ventas mensuales',
    data: [65, 59, 80, 81, 56, 55, 40],
    fill: false,
    borderColor: 'rgb(75, 192, 192)',
    tension: 0.1
  }]
};
const config = {
  type: 'line',
  data: dataVentas,
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
};
new Chart(chartElementline, config);

// Gráfico de barras horizontales - Inventario por categoría
const chartElementInventory = document.getElementById('inventarioPorCategoria');
const dataInventory = {
  labels: ['Categoría A', 'Categoría B', 'Categoría C', 'Categoría D'],
  datasets: [{
    label: 'Inventario por categoría',
    data: [200, 150, 100, 50],
    backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)', 'rgb(153, 102, 255)'],
    borderColor: 'rgb(255, 99, 132)',
    borderWidth: 1
  }]
};
const configInventory = {
  type: 'bar',
  data: dataInventory,
  options: {
    indexAxis: 'y',
    responsive: true,
    scales: {
      x: {
        beginAtZero: true
      }
    }
  }
};
new Chart(chartElementInventory, configInventory);
</script>

@endsection()