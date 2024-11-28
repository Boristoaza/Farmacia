
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
                <tr>
                    <th scope="row">1</th>
                    <td>0959026964001</td>
                    <td>Saul</td>
                    <td>Toaza</td>
                    <td>saul2564@gmail.com</td>
                    <td>0986486166</td>
                    <td>Mapasingue oeste</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>0959027095001</td>
                    <td>Boris</td>
                    <td>Toaza</td>
                    <td>boris7@gmail.com</td>
                    <td>0964325782</td>
                    <td>Mapasingue oeste</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection()
