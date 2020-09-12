<?php

class Color{

    public $polera;
    public $gorra;

    public function Ropa(){

        echo "<p>Ropa de color Polera: $this->polera, Gorra de color: $this->gorra</p>";
    }
}

$a = new Color();
$a -> polera = "Roja";
$a -> gorra = "Azul";
$a -> Ropa();

$b = new Color();
$b -> polera = "Negro";
$b -> gorra = "Blanca";
$b -> Ropa();