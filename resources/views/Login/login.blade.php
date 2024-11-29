<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body class="bg-dark">
    
    <div class="container card shadow bg-dark" style="margin-top: 200px; width:400px; height:400px; border-radius:20px">

        <form action="/iniciosesion" method="POST">
            @csrf
            <!--el input group agrupa entrada y icono
            y el group text alinea el contenedor con el campo-->
            
            <div class="rounded-circle bg-light d-flex justify-content-center align-items-center"
            style="width: 150px; height:150px; position:absolute; top: -30px; left:50%; transform: translateX(-50%); font-size:4rem;">
                <i class="bi bi-person"></i>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" style="margin-top: 150px;"><i class="bi bi-person"></i></span>
                <input type="email" class="form-control" id="correo" name="correo" 
                placeholder="Usuario" style="margin-top: 150px; border-radius:0%;" required>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control" id="clave" name="clave" 
                placeholder="Contraseña" style="border-radius: 0%;" required>
            </div>
            <div class="form-check" style="width: 50%;">
                <input type="checkbox" class="form-check-input" id="recordar" name="recordar" style="margin-top: 20px;">
                <label for="recordar" class="form-check-label link-light opacity-75" style="margin-top: 16px;">Recordar Contraseña</label>
            </div>
            <div class="mb-3" style="margin-top: -26px;">
                <a class="link-light opacity-75" href="#" style="margin-left: 210px;">Olvido su contraseña?</a>
            </div>
            
            <button type="submit" class="btn btn-outline-primary w-100 opacity-75" style="margin-top: 20px;">Login</button>
        </form>
        
        

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>