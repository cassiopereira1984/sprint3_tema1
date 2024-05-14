<?php

include "dependency.php";

//Creas los objetos a ser incertados.
$cartera = new Cartera();
$llaves = new Llaves();
$tarjeta = new Tarjeta();

//Se incertas los objetos a la clase.
$persona = new Persona($cartera, $llaves, $tarjeta);

//imprime el objeto y las incerciones.
$persona;