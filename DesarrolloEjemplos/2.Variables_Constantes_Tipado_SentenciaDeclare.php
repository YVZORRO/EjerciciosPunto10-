<?php
declare(strict_types=1); // uso de la sentencia declare
// con esta sentencia se habilita el tipado fuerte
// debe ser la primera declaración del script en el archivo PHP

// Declaración de variables y constantes
$numero = 5; // variable tipo débil

define("Constante", 3.14); // constante
echo "El valor de la Constante es: " . Constante;

// variable de carácter fuerte y de débil tipado
$num = 10; // se establece como entero
echo "<br>" . $num;
$num = "Analizando los tipados fuerte y debil"; // ahora es una cadena
echo "<br>" . $num;



