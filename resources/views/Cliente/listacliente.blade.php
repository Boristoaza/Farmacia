@extends('index')
@section('title' , 'listado')
@section('content')
<body class="bg-light">

    <div class="container mt-4 shadow ">
        <h1 class=" text-center mb-4">Lista de clientes</h1>
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

            <tbody>
                
                    <tr>
                        <th scope="row">1</th>
                        <td>09590269642001</td>
                        <td>Saul</td>
                        <td>Toaza</td>
                        <td>saul692001@gmail.com</td>
                        <td>0988230974</td>
                        <td>Mapasingue oeste colinas de hipodromo</td>
                    </tr>
                
                
            </tbody>
            
        </table>

    </div>
@endsection