<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class= "text-info-emphasis pt-4 text-center">Información de la Canción</h1>
    <div class="container">
        <form method="post" action="" class="p-3">
            <label class="m-1 p-1" for="titulo">Título:</label>
            <input class="form-control" type="text" id="titulo" name="titulo"><br>

            <label class="m-1 p-1" for="genero">Género:</label>
            <input class="form-control" type="text" id="genero" name="genero"><br>

            <label class="m-1 p-1" for="autor">Autor:</label>
            <input class="form-control" type="text" id="autor" name="autor">

            <input class="btn btn-outline-dark mt-4" type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>

<?php

require "./cancion.php";

$cancion = new Cancion("", "");

$titulo = @$_POST['titulo'];
$genero = @$_POST["genero"];
$autor = @$_POST["autor"];

    

    $cancion = new Cancion($titulo, $genero);
    $cancion->setAutor($autor);
    $cancion->datosCancion();
?>