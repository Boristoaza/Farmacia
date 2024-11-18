<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-md">
    <a class="navbar-brand" href="#">Inventario</a>
  </div>
</nav>
<br>
<div class="container-md">
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
<!-- Gráficos -->
<!-- <div class="container-md mt-4">
  <div class="row g-3"> -->
    <!-- Primer gráfico -->
    <!-- <div class="col-sm-6">
      <div class="chart-container">
        <canvas id="myChart"></canvas>
      </div>
    </div> -->

    <!-- Segundo gráfico -->
    <!-- <div class="col-sm-6">
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
</div> -->
<br>
<div class="container-md">
<table class="table ">
  <thead>
    <tr class="bg-light">
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
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
<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p>&copy; 2024 <a href="https://www.soyuz.com" target="_blank">SOYUZ S.A.</a>. Todos los derechos reservados.</p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
  <div class="card-footer text-body-secondary">
    2 days ago
  </div>
</div>

<!-- Estilos para los gráficos -->
<!-- <style>
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

// Gráfico de dona - Productos más vendidos
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

// Gráfico de líneas - Tendencias de ventas
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
</script> -->