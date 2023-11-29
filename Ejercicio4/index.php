<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class= "text-info-emphasis pt-4 text-center">Cuenta de Ahorros</h1>

    <div class="container">
        <form action="" method="POST" class="pt-3" >
            <label for="" class="m-1 p-1">Nombre: </label>
            <input type="text" class="form-control" id="" name="nombre">
            <label for="" class="m-1 p-1">Tipo de cuenta: </label>
            <input type="text" class="form-control" id="" name="tipoCuenta">
            <label for="" class="m-1 p-1">Número de cuenta: </label>
            <input type="text" class="form-control" id="" name="numeroCuenta">
                 
            <input type="submit" class="btn btn-dark mt-4" value="Envíar">
        </form>
    </div>
</body>
<?php

    require "./cuenta.php";

     
    $nombre = @$_POST['nombre']; 

    $tipoCuenta = @$_POST['tipoCuenta'];

    $numeroCuenta = @$_POST['numeroCuenta'];

    $cantidad = @$_POST['cantidad'];


    $cuenta = new Cuenta($nombre, $cantidad, $tipoCuenta, $numeroCuenta);
    $cuenta->mostrarDatos();
   
?>