<?php

class Cancion {
    public $titulo;
    public $genero;
    private $autor;

    public function __construct($titulo, $genero) {
        $this->titulo = $titulo;
        $this->genero = $genero;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function datosCancion() {
        //echo "Título: " . $this->titulo . "<br>";
        //echo "Género: " . $this->genero . "<br>";
        //echo "Autor: " . $this->autor . "<br>";


        echo '<div style="text-align: center;">';
        echo '<div style="display: inline-block; text-align: left; border: 3px solid #055160; border-radius: 10px; padding: 10px;">'; // Abre un div interno para el contenido
        echo "Título: " . "<b> $this->titulo </b>" . "<br>";
        echo "Género: " . "<b> $this->genero </b>" . "<br>";
        echo "Autor: " . "<b> $this->autor </b>" . "<br>";
        echo '</div>';
        echo '</div>';
    }
}
?>
