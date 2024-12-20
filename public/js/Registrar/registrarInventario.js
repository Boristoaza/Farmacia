$(document).ready(function () {
  $('#registrarPoducto').click(function (e) {
    e.preventDefault(); // Evita el comportamiento predeterminado del botón

    let dataUrl = $(this).data('url');
    let datos = {
      nombre_producto: $('#nombreDelProducto').val(),
      categoria: $('#categoría').val(),
      cantidad_stock: $('#cantidadEnStock').val(),
      precio_compra: $('#precioDeCompra').val(),
      precio_venta: $('#precioDeVenta').val(),
      proveedor: $('#proveedor').val(),
    };
    $.ajax({
      url: dataUrl,
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), // Token CSRF
      },
      data: datos, // Enviar datos directamente
      success: function (respuesta) {
        $('#nombreDelProducto').val('');
        $('#categoría').val('');
        $('#cantidadEnStock').val('');
        $('#precioDeCompra').val('');
        $('#precioDeVenta').val('');
        $('#proveedor').val('');

        alert('Producto registrado exitosamente.');
      },
      error: function (error) {
        console.error('Error:', error);
        let responseJSON = error.responseJSON;
        if (responseJSON && responseJSON.errors) {
          let errorMessage = Object.values(responseJSON.errors).flat().join('\n');
          alert('Errores en la validación:\n' + errorMessage);
        } else {
          alert('Error en el envío: ' + JSON.stringify(error));
        }
      },
    });
  });
});


//buscar un produncto en el inventario
$(document).ready(function() {
  $('#BuscadorInventario').click(function() {
    let urlInventario = $(this).data('url');
    const dato = $('#InputInventario').val();
    alert('se presino el boton de buscar inventario ' + dato);
    $.ajax({
      url: urlInventario,
      method: 'POST',
      data: {
        BuscadorInventario: dato,
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(respuesta) {
        console.log(respuesta);
        $('table tbody').empty();


        respuesta.array.forEach(element => {
          $('table tbody').append(
           "<tr>" +
              "<td>" + element.nombre_producto + "</td>" +
              "<td>" + element.categoria + "</td>" +
              "<td>" + element.cantidad_stock + "</td>" +
              "<td>" + element.precio_compra + "</td>" +
              "<td>" + element.precio_venta + "</td>" +
              "<td>" + element.proveedor + "</td>" +
           "</tr>"
          )
        });
        $('#InputInventario').val('');

        // alert('Éxito en el envío de datos: ' + JSON.stringify(respuesta['datos del query realizado']));
      },
      error: function(xhr, status, error) {
        alert('Error fatal')
      }
    });
  });
});

// eliminar inventario
$(document).ready(function() {
  $('#eliminarElementoInventario').click(function() {
    const dato = $('#InputInventario').val();
    let dataUrlEliminar = $(this).data('url');
    $.ajax({
      url : dataUrlEliminar,
      method: 'POST',
      data: {
        eliminarDatoInventario: dato
      },
      header: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(respuesta) {
        console.log(respuesta);
        alert('se enviaoron los datos a ser eliminados' + JSON.stringify(respuesta[
          'datos de la eliminacion']))
      },
      error: function(xhr, status, error) {
        alert('error faltal');
      }
    });
  });
});
