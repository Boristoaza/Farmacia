@extends('index')
@section('title' , 'Cliente')
@section('content')
<div class="bg-light  ">
    <div class="container-xl mt-5 shadow ">
        <h2 class="text-center mb-3" style="font-size: 30px;">Registro de clientes</h2>
        <form action="/guardar-clientes" method="post">

            <div class="mb-3">
                <label for="ruc" class="form-label">Ruc o Cedula</label>
                <input type="text" class="form-control" id="ruc" name="ruc" placeholder="Ingresa tu ruc" required>
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre"
                placeholder="Ingresa tu nombre" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo"
                placeholder="Ingresa tu correo electronico" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono"
                placeholder="(XXX) XXX-XXXX" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion"
                placeholder="Calle, Numero , Ciudad" required>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Registrar Cliente</button>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection()