<?php
/* Cómo implementarlo
Añade un campo estático privado a la clase para almacenar la instancia Singleton.

Declara un método de creación estático público para obtener la instancia Singleton.

Implementa una inicialización diferida dentro del método estático. Debe crear un nuevo objeto en su 
primera llamada y colocarlo dentro del campo estático. El método deberá devolver siempre esa instancia 
en todas las llamadas siguientes.

Declara el constructor de clase como privado. El método estático de la clase seguirá siendo capaz de 
invocar al constructor, pero no a los otros objetos.

Repasa el código cliente y sustituye todas las llamadas directas al constructor de la instancia 
Singleton por llamadas a su método de creación estático. */

class Tigger {
    //Añade un campo estático privado a la clase para almacenar la instancia Singleton.
    private static $variable;
    private static $count = 0;

    /*Declara el constructor de clase como privado. El método estático de la clase seguirá siendo capaz de 
    invocar al constructor, pero no a los otros objetos.*/
    private function __construct() {
        echo "Personage creado." . PHP_EOL;
    }

    //Declara un método de creación estático público para obtener la instancia Singleton.
    public static function getInstance() {
        /*Implementa una inicialización diferida dentro del método estático. Debe crear un nuevo objeto en su 
        primera llamada y colocarlo dentro del campo estático. El método deberá devolver siempre esa instancia 
        en todas las llamadas siguientes.*/
        if(!isset(self::$variable)) {
            self::$variable = new Tigger();
        }
        return self::$variable;
    }

    public function roar() {
        echo "Grhhhh!" . PHP_EOL;
        self::$count++;
    }

    public function getCounter() {
        $roar = self::$count;
        echo "El numero de rugidos es de: " . $roar . PHP_EOL;
    }
}

/*Repasa el código cliente y sustituye todas las llamadas directas al constructor de la instancia 
Singleton por llamadas a su método de creación estático. */

$singleton->getInstance();
