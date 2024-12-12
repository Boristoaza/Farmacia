
@extends('index')
@section('title' , 'listado')
@section('content')
<div class="bg-light">
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
                @foreach($dato_cliente as $key =>$dato_cliente)
                    <tr>
                        <th scope="row">{{$key +1}}</th>
                        <td>{{$dato_cliente->ruc}}</td>
                        <td>{{$dato_cliente->nombre}}</td>
                        <td>{{$dato_cliente->apellido}}</td>
                        <td>{{$dato_cliente->correo}}</td>
                        <td>{{$dato_cliente->telefono}}</td>
                        <td>{{$dato_cliente->direccion}}</td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection()
