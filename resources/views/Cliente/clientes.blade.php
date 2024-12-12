@extends('index')
@section('title' , 'Cliente')
@section('content')
<div class="bg-light  ">

<div class="container mt-5 shadow" style="width: 30%;">
        <h2 class="text-center mb-3" style="font-size: 30px;">Registro de clientes</h2>

        <form  action="/guardar-clientes" method="POST">
            @csrf
            <div class="mb-3">
                <label for="ruc" class="form-label ">Ruc o Cedula</label>
                <input type="text" class="form-control border-primary-subtle" id="ruc" name="ruc" placeholder="Ingresa tu ruc" required>
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control border-primary-subtle" id="nombre" name="nombre"
                placeholder="Ingresa tu nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control border-primary-subtle" id="apellido" name="apellido"
                placeholder="Ingresa tu apellido" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control border-primary-subtle" id="correo" name="correo"
                placeholder="Ingresa tu correo electronico" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="tel" class="form-control border-primary-subtle" id="telefono" name="telefono"
                placeholder="(XXX) XXX-XXXX" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control border-primary-subtle" id="direccion" name="direccion"
                placeholder="Calle, Numero , Ciudad" required>
            </div>
            <button type="submit" class="btn btn-primary mb-3 ">Registrar Cliente</button>
        </form>
    </div>
@endsection()
