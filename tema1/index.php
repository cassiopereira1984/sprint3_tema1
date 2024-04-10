<?php
include "singleton.php";

/*Repasa el código cliente y sustituye todas las llamadas directas al constructor de la instancia 
Singleton por llamadas a su método de creación estático. */

//Se instancia el objeto de la clase.
$instancia = Tigger::getInstance();
//Llamada metodo roar()
$instancia->roar();
$instancia->roar();
//llamada contador de roar.
$instancia->getCounter();
//Se instancia otra vez el objeto.
$instancia2 = Tigger::getInstance();
//llamada metodo roar() para comprobar incremento del objeto.
$instancia2->roar();
//llamada contador de roar para observar incremento.
$instancia->getCounter();

?>