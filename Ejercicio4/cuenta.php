<?php
class Cuenta{
    public $nombre;
    public $cantidad;
    public $tipoCuenta;
    public $numeroCuenta;
    
    public function __construct($nombre, $cantidad, $tipoCuenta, $numeroCuenta)
    {
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->tipoCuenta = $tipoCuenta;
        $this->numeroCuenta = $numeroCuenta;
    }
    
    public function depositar($cantidad) {
        if ($cantidad < 5.00) {
            echo "El valor a depositar debe ser mayor a $5.00.";
        } else {
            $this->cantidad += $cantidad;
            echo "Se ha depositado correctamente la cantidad de $cantidad. Su nuevo saldo es: $this->cantidad";
        }
    }
    
    public function retirar($valor) {
        if ($valor < 5.00) {
            echo "El valor a retirar debe ser mayor a $5.00.";
        } elseif ($this->cantidad < $valor) {
            echo "No hay suficiente dinero en la cuenta.";
        } else {
            $this->cantidad -= $valor;
            echo "Se ha retirado $valor. Su nuevo saldo es: $this->cantidad";
        }
    }
    
    public function mostrarDatos() {
       
        echo '<div style="text-align: center;">';
        echo '<div style="display: inline-block; text-align: left; border: 3px solid #055160; border-radius: 10px; padding: 10px;">';
        echo "Nombre: " . "<b> $this->nombre </b>" . "<br>";
        echo "Tipo de Cuenta: " . "<b> $this->tipoCuenta </b>" . "<br>";
        echo "Número de Cuenta: " . "<b> $this->numeroCuenta </b>" . "<br>";
        echo '</div>';
        echo '</div>';
       
    }
}

?>
