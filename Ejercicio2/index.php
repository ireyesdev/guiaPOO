<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <h2 class= "text-info-emphasis pt-4 text-center">Calculadora</h2>
    
        <div class="container">
        <form class="pt-3" action="" method="post">
            <label class="m-1 p-1" for="num1">Número 1:</label>
            <input class="form-control" type="number" id="num1" name="num1"><br>

            <label class="m-1 p-1" for="num2">Número 2:</label>
            <input class="form-control" type="number" id="num2" name="num2"><br>

            <label class="m-1 p-1" for="operacion">Operación:</label>
            <select class="form-control" id="operacion" name="operacion">
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
                <option value="potencia">Potencia</option>
                <option value="factorial">Factorial</option>
            </select><br>
    
            <input class="btn btn-outline-dark mt-4" type="submit" value="Calcular">
    </div>
        </form>
</body>
</html>
<?php

require "./procesar.php";

?>