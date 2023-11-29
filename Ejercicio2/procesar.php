<?php
include 'Calculadora.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    $calculadora = new Calculadora();

    switch ($operacion) {
        case 'sumar':
            $resultado = $calculadora->sumar($num1, $num2);
            break;
        case 'restar':
            $resultado = $calculadora->restar($num1, $num2);
            break;
        case 'multiplicar':
            $resultado = $calculadora->multiplicar($num1, $num2);
            break;
        case 'dividir':
            $resultado = $calculadora->dividir($num1, $num2);
            break;
        case 'potencia':
            $resultado = $calculadora->potencia($num1, $num2);
            break;
        case 'factorial':
            $resultado = $calculadora->factorial($num1);
            break;
        default:
            $resultado = "Operación no válida";
            break;
    }

    echo '<div style="text-align: center;">';
    echo '<div style="display: inline-block; text-align: left;
    border: 3px solid #055160; border-radius: 10px; padding: 10px;">';
    echo "El Resultado es: " . "<b> $resultado </b>" . "<br>";
    echo '</div>';
    echo '</div>';

}

?>
