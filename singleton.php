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

class Singleton {
    //Añade un campo estático privado a la clase para almacenar la instancia Singleton.
    private static $variable;

    /*Declara el constructor de clase como privado. El método estático de la clase seguirá siendo capaz de 
    invocar al constructor, pero no a los otros objetos.*/
    private function __construct() {

    }

    //Declara un método de creación estático público para obtener la instancia Singleton.
    public static function getInstance() {
        /*Implementa una inicialización diferida dentro del método estático. Debe crear un nuevo objeto en su 
        primera llamada y colocarlo dentro del campo estático. El método deberá devolver siempre esa instancia 
        en todas las llamadas siguientes.*/
        self::$variable = new Singleton();
        return;
    }
}

/*Repasa el código cliente y sustituye todas las llamadas directas al constructor de la instancia 
Singleton por llamadas a su método de creación estático. */

$singleton->getInstance();
