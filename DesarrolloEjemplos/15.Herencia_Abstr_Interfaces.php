<?php


abstract class Animal // clase abstracta por que no se puede crear un objeto directamente de ella
{
    abstract public function hacerSonido(); // metodo abstracto que las clases hijas deben definir en ellas osea en Vaca
}

class Vaca extends Animal // clase que se hereda de animal
{
    public function hacerSonido() // implementa el metodo abstracto de la clase Animal
    {
        echo "MUUUUUUUUU!";
    }
}

$vaca = new Vaca();
$vaca->hacerSonido();


