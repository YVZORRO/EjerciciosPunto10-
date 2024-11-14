<?php

declare(strict_types=1);
// Declaración de función con parámetros por valor, referencia, por defecto, tipado fuerte y retorno
function calcularPromedio(float $total, int $cantidad = 1): float
{
    return $total / $cantidad;
}

// Función con parámetros por referencia
function agregarSufijo(&$nombre, string $sufijo = " Sra.")
{
    $nombre .= $sufijo;
}

// Función con argumentos variables
function sumarElementos(...$numeros): int
{
    return array_sum($numeros);
}

// Uso de las funciones
$precioTotal = 150;
$items = 5;
echo "Promedio: " . calcularPromedio($precioTotal, $items) . "<br>"; // Muestra el promedio

$nombrePersona = "Patricia";
agregarSufijo($nombrePersona);
echo "Nombre de la persona con su sufijo: " . $nombrePersona . "<br>"; // Nombre que se cambio por referencia

echo "Suma total: " . sumarElementos(10, 20, 30, 40) . "<br>"; // Suma de valores variables
