<?php
class Calculadora {
    public function sumar($num1, $num2) {
        return $num1 + $num2;
    }

    public function restar($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }

    public function dividir($num1, $num2) {
        if ($num2 == 0) {
            return "No se puede dividir entre cero";
        }
        return $num1 / $num2;
    }

    public function potencia($base, $exponente) {
        return pow($base, $exponente);
    }

    public function factorial($num) {
        if ($num === 0 || $num === 1) {
            return 1;
        } else {
            return $num * $this->factorial($num - 1);
        }
    }
}
?>