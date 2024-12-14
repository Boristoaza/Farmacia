@extends('index')
@section('title','listaproducto')
@section('content')

    <div class="container-xl mt-5">
        <h1 class="text-center mb-4">Lista de productos</h1>
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <form id="buscarform" class="d-flex " role="search" style="margin-left: -5px;" >
                    <input id="buscarinput" type="search" class="form-control me-2" placeholder="Buscar producto........" style="width:870px;">
                    <button type="submit" class="btn btn-outline-success" style="margin-right: 10px; width:90px;">Buscar</button>
                    <button type="submit" class="btn btn-outline-danger" style="width: 90px;">Eliminar</button>
                </form>
            </div>
        </nav>
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock Disponible</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Fecha creacion</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody id="tablaproducto">
                @foreach ($producto as $key => $productos)
                <tr class="table-light">
                    <td>{{$productos->codigo}}</th>
                    <td>{{$productos->nombreproducto}}</td>
                    <td>{{$productos->descripcion}}</td>
                    <td>{{$productos->precio}}</td>
                    <td>{{$productos->stock}}</td>
                    <td>{{$productos->opciones}}</td>
                    <td>{{$productos->creacion}}</td>
                    <td>{{$productos->estado}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
            //esperar a que el formulario html este completamente cargado para ejecutar el codigo
        $('document').ready(function(){
            //seleccionar el formulario buscarform y escuchar el evento
            $('#buscarform').on('submit',function(e){

            //prevenir comportamiento predeterminado de recargar pagina
            e.preventDefault();

            //seleccionar el valor del input
            let query = $('#buscarinput').val();

            //solicitud ajax
            $.ajax({
                //ruta de la solicitud
                url: '/buscarproducto',
                method: 'POST',
                data: {
                    query: query,
                    _token: '{{csrf_token()}}'
                },
                //funcion que se ejecuta si la solicitud tiene exito
                success: function(data){
                    //selecciona el cuerpo donde se mostraran los productos
                    let tablebody =$('#tablaproducto');
                    //limpia el contenido actual de la tabla
                    tablebody.empty();
                    //verificar si hay productos en datos devueltos por el servidor
                    if(data.length > 0){
                        //itera sobre los productos y agrega como fila a la tabla
                        data.forEach(producto => {
                            tablebody.append(
                                `<tr class="table-light">
                                    <td>${producto.codigo}</td>
                                    <td>${producto.nombreproducto}</td>
                                    <td>${producto.descripcion}</td>
                                    <td>${producto.precio}</td>
                                    <td>${producto.stock}</td>
                                    <td>${producto.opciones}</td>
                                    <td>${producto.creacion}</td>
                                    <td>${producto.estado}</td>
                                <tr>`
                            );
                        });
                    }else{
                        // sino hay productos muestra un mensaje que no hay productos
                        tablebody.append('<tr><td colspan ="8" class="text-center">No existe ese producto</td></tr>');

                    }

                },
                //funcion que se ejecuta si ocurre un error en la solicitud
                error: function(error){
                    console.error('Error:',error);
                }

            });

            });
        });

    </script>

@endsection