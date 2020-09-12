<?php

//Variable tipo numero

$numero = 10;

echo 'Esto es un numero: '.$numero;
echo '<br><br>';

// Variable tipo texto

$texto = "esto es cadena de texto";

echo 'Prodriamos decir que, '.$texto;
echo '<br><br>';

// Variable tipo booleana

$booleana = true;

echo 'Esto es una variable booleana '.$booleana;
echo '<br><br>';

//Variable de tipo Arreglo

$arreglo = array("Miguel","Claudia","Silinia");

echo $arreglo[1];
echo '<br><br>';

//Variable de tipo de arreglo con propiedades

$colores = array("color1"=>"Amarillo","color2"=>"Rojo","color3"=>"Verde");

echo $colores["color2"];
echo '<br><br>';

//Variable tipo objeto

$objeto = (object)["mueble1"=>"Refrigerador","mueble2"=>"Cama","mueble3"=>"Ropero"];

echo $objeto->mueble2;



?>