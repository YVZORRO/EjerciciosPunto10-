<?php

class Cosa // se define una clase llamada Cosa
{
    // el constructor se llama automáticamente cuando se crea una instancia de la clase
    // El metodo imprime "Demostración para mostrar al Constructor".
    public function __construct()
    {
        echo "Demostración para mostrar al Constructor<br>";
    }
// el destructor se llama cuando el objeto se destruye, ya sea automáticamente al finalizar el script o explícitamente con unset($cosa).
// y el metodo imprime "Demostración para mostrar el Destructor".
    public function __destruct()
    {
        echo "Demostración para mostrar el Destructor<br>";
    }
}
// Al crear una instancia $cosa, el constructor se ejecuta y muestra el mensaje del constructor
$cosa = new Cosa();
// se elimina el objeto con unset($cosa) y se llama al destructor, que muestra el mensaje del destructor
unset($cosa);

