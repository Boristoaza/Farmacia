$(document).ready(function() {
  $('#BuscarPorveedor').click(function(e) {
    e.preventDefault();
    const dato = $('#datoBuscador').val();
    let urlProveedor = $(this).data('url');
    $.ajax({
      url:urlProveedor,
      method: 'POST',
      data: {
        buscarProveedor: dato
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(respuesta) {
        console.log('Respuesta del servidor:', respuesta);

        // Limpia la tabla antes de insertar nuevos datos
        $('table tbody').empty();

        // Agrega las filas con los datos obtenidos
        respuesta.forEach(element => {
          $('table tbody').append(
            "<tr>" +
            "<td>" + element.nombre_de_la_empresa + "</td>" +
            "<td>" + element.ruc + "</td>" +
            "<td>" + element.telefono + "</td>" +
            "<td>" + element.email + "</td>" +
            "<td>" + element.direccion + "</td>" +
            "<td>" + element.cuenta_bancaria + "</td>" +
            "<td>" + element.banco + "</td>" +
            "<td>" + element.tipo_cuenta + "</td>" +
            "<td>" + element.condiciones_pago + "</td>" +
            "</tr>"
          );
        });
        // Limpia el campo de búsqueda
        $('#datoBuscador').val('');
      },
      error: function(xhr, status, error) {
        alert('Error al enviar datos: ' + error);
      }
    });
  });
});