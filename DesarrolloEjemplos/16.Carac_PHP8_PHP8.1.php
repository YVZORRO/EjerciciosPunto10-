<?php

// Union Types en PHP 8
// Permiten declarar múltiples tipos para un parámetro o valor de retorno.
// En la función sumar, el tipo de los parámetros $a y $b es int|string,
// lo que significa que pueden ser enteros o cadenas.

function sumar(int|string $a, int|string $b): int|string
{
    return $a + $b;
}

// Constructor Property Promotion en PHP 8
// Esta característica permite definir y asignar propiedades de clase directamente en el constructor,
// sin necesidad de escribir código adicional.

class Persona
{
    public function __construct(public string $nombre, public int $edad)
    {
    }
}

$persona = new Persona("Juan", 30);

