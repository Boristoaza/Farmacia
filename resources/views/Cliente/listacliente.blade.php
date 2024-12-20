@extends('index')
@section('title' , 'listado')
@section('content')
<body class="bg-light">

    <div class="container mt-4 shadow ">
        <h1 class=" text-center mb-4">Lista de clientes</h1>
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <form class="d-flex" role="search" id="busquedas" style="margin-left: -10px;">
                    <input id="buscar" type="search" class="form-control" placeholder="Buscar cliente............" style="width: 920px;">
                    <button type="submit" class="btn btn-outline-success" style="margin-left: 5px;">Buscar</button>
                    <button type="submit" class="btn btn-outline-danger" style="margin-left: 5px;">Eliminar</button>
                </form>
            </div>
        </nav>
        <table class="table table-striped table-hover">
            <tr class="table-dark">
                <th class="col">#</th>
                <th scope="col">Ruc o Cedula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col" style="width:180px;">Correo</th>
                <th scope="col" style="width:200px;">Telefono</th>
                <th scope="col" style="width: 200px;">Direccion</th>
            </tr>

            <tbody id="tablacliente">
                @foreach ($clientes as $key => $cliente)
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td>{{$cliente->ruc}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->apellido}}</td>
                        <td>{{$cliente->correo}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->direccion}}</td>
                    </tr>
                @endforeach
                
                
            </tbody>
            
        </table>

    </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$('document').ready(function(){
    $('#busquedas').on('submit',function(e){

        e.preventDefault();

        let query=$('#buscar').val();

        $.ajax({
            url: '/buscarcliente',
            method:'POST',
            data:{
                query:query,
                _token:'{{csrf_token()}}'
            },
            success:function(data){
                let tablebody=$('#tablacliente');
                tablebody.empty();
                if(data.length > 0){
                    data.forEach(cliente=>{
                        tablebody.append(
                            `<tr class="table-light">
                            <td>${cliente.key+1}</td>
                            <td>${cliente.ruc}</td>
                            <td>${cliente.nombre}</td>
                            <td>${cliente.apellido}</td>
                            <td>${cliente.correo}</td>
                            <td>${cliente.telefono}</td>
                            <td>${cliente.direccion}</td>
                            </tr>`
                        );
                    });
                }else{
                    tablebody.append('<tr><td colspan ="8" class="text-center">No existe el cliente</td></tr>');
                }
            },
            error:function(error){
                console.error('Error:',error);
            }

        });

    });
});
</script>


@endsection