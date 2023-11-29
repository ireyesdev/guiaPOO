<?php

class cabeceraPagina{
    public $titulo;
    public $color;
    public $fuente;
    public $alinearTitulo;
    
    public function __construct($titulo, $color, $fuente)
    {
        $this->titulo = $titulo;
        $this->color = $color;
        $this->fuente = $fuente;
               
    }

    public function alinearTitulo($alinear) {
        $this->alinearTitulo = $alinear;
    
    }

    public function imprimirPropiedades() {
             
        echo '<div style="text-align: center;">';
        echo '<div style="display: inline-block; text-align: left; border: 3px solid #055160; border-radius: 10px; padding: 10px;">'; // Abre un div interno para el contenido
        echo "Título: " . "<b> $this->titulo </b>" . "<br>";
        echo "Color: " . "<b> $this->color </b>" . "<br>";
        echo "Fuente: " . "<b> $this->fuente </b>" . "<br>";
        echo "Alineación del Título: " . "<b> $this->alinearTitulo </b>" . "<br>";
        echo '</div>';
        echo '</div>';
    }
}
?>  