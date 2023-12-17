<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="resources/css/barra.css">
    <link rel="icon" href="logo.png" type="image/x-icon">
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-sm-5 col-lg-3 bg-white p-3">
            <p class="text-center fs-4 display-6 mt-3 mb-3 fw-bold">REGISTRATE</p>
            <form class="m-4" action="/Proyecto Web/app/Http/Controllers/ControllerRegistro.php">
                <div class="mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" aria-describedby="user">
                <div>
                <div class="mb-3">
                    <label for="pass" class="form-label mt-3">Contraseña</label>
                    <input type="password" class="form-control" name="clave_hash" id="pass">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                </div>
                <div class="row">
                    <div class="text-center">
                        <button type="submit" name="btnRegistrar" class="btn btn-primary col-8">REGISTRARME</button>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center">
                        <a href=" /Proyecto Web/login.php">Volver</a>
                    </div>
                </div>
            </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>