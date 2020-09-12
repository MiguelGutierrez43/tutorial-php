<?php

$color1 = (object)["polera"=>"Roja","gorra"=>"Azul"];
$color2 = (object)["polera"=>"Verde","gorra"=>"Amarillo"];

function Ropa($color){

    echo "<p>Ropa de color polera: $color->polera, Color de gorro: $color->gorra</p>";
}

Ropa($color1);
Ropa($color2);