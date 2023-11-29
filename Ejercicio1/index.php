<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class= "text-info-emphasis pt-4 text-center">Cabecera de Página</h1>

    <div class="container">
        <form action="" method="POST" class="pt-3" >
            <label for="" class="m-1 p-1">Título: </label>
            <input type="text" class="form-control" id="" name="titulo">
            <label for="" class="m-1 p-1">Color: </label>
            <input type="text" class="form-control" id="" name="color">
            <label for="" class="m-1 p-1">Fuente: </label>
            <input type="text" class="form-control" id="" name="fuente">
            <label for="" class="m-1">Alinear Título: </label></br>
            <select name="alinear" id="" class="m-1 p-1">
                <option value="Centrado">Centrado</option>
                <option value="Derecha">Derecha</option>
                <option value="Izquierda">Izquierda</option>
            </select><br>
            <input type="submit" class="btn btn-outline-dark mt-4" value="Envíar">
        </form>
    </div>
</body>
    <?php

    require "./cabeceraPagina.php";

    $titulo = @$_POST['titulo']; 

    $color = @$_POST['color'];

    $fuente = @$_POST['fuente'];

    $alinear = @$_POST['alinear'];

    


$cabecera = new cabeceraPagina($titulo, $color, $fuente);
$cabecera->alinearTitulo($alinear);
$cabecera->imprimirPropiedades();

?>