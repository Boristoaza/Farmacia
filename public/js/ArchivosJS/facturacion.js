$(document).ready(function () {
  $('#seleccionarEstablecimiento').change(function () {
    const valor = $(this).val(); // Captura el valor seleccionado
    alert('Data: ' + valor);
  });

  $('#puntoEmison').change(function () {
    const valor = $(this).val();
    const valor2 = $('#fecha-emision').val();
    alert('puntos de emision ' + valor + valor2);
  })

});