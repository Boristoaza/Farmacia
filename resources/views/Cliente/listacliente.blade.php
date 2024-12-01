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
@endsection