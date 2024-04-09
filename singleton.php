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

    public function roar() : string {
        echo "Grhhhh!" . PHP_EOL;
        self::$count++;
    }

    public function getCounter() : string {
        $roar = self::$count;
        echo "El numero de rugidos es de: " . $roar . PHP_EOL;
    }
}

/*Repasa el código cliente y sustituye todas las llamadas directas al constructor de la instancia 
Singleton por llamadas a su método de creación estático. */

$singleton->getInstance();

/* El diseño singleton nos permite modelar un codigo de manera a que no se pueda crear mas de un objeto
de una misma clase, utilizandose del modificador de acceso private en los atributos y construct, haciendo
publico el metodo getInstance(), responsable por instanciar la clase una sola vez, devolvendo el mismo
objeto siempre que se llama el metodo getInstance();*/
?>