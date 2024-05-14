<?php
/*Dependency Injection
Imagina que eres una persona que está a punto de salir de casa para estudiar/trabajar. Antes de 
salir de casa necesitarás llevar la cartera, las llaves de casa, quizás las llaves del coche/moto o 
la tarjeta del transporte público, y el smartphone.

Realiza un programa que simule esta lógica utilizando el patrón de inyección de dependencias.

Básicamente, en lugar de que un objeto cree sus propias dependencias, estas se le pasan desde el 
exterior, lo que permite una mayor flexibilidad y facilita la reutilización del código. Esto significa 
que un objeto no necesita saber cómo crear sus dependencias, sino que simplemente las recibe ya creadas.

Por ejemplo, en PHP, puedes implementar la inyección de dependencias a través de la inyección por
constructor, la inyección por método setter, o incluso inyectando las dependencias directamente a 
través de contenedores de inversión de control (IoC containers).*/

class Cartera
{
    public function __construct() {
        echo "Cogí la cartera." . PHP_EOL;
    }
}

class Llaves
{
    public function __construct() {
        echo "Cogí las llaves." . PHP_EOL;
    }
}

class Tarjeta
{
    public function __construct() {
        echo "Cogí la Tarjeta." . PHP_EOL;
    }
}

class Persona
{
    private $cartera;
    private $llaves;
    private $tarjeta;

    public function __contruct(Cartera $cartera, Llaves $llaves, Tarjeta $tarjeta) {
        $this->cartera = $cartera;
        $this->llaves = $llaves;
        $this->tarjeta = $tarjeta;
    }
}
?>