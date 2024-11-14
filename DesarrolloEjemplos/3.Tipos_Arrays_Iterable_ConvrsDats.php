<?php
declare(strict_types=1);

// Tipos de datos
$boolean = true; // booleano verdadero o falso
$int = 7; // entero
$float = 9.4; // flotante
$string = "Vanesa"; // cadena
$NaN = acos(2); // Resultado es NAN
$null = null; // vacío o sea nada
$array = [4, 7, 9]; // arreglo
// Objeto
// Representa instancias de clases.
// Permite almacenar propiedades y métodos relacionados con una entidad en particular.
class Producto {
    public $string;
    public function __construct($string) {
        $this->nombre = $string;
    }
}
$producto = new Producto("Libro");

// impresión
echo "<br>" . $boolean;
echo "<br>" . $int;
echo "<br>" . $float;
echo "<br>" . $string;
echo "<br>" . $NaN;
echo "<br>" . $null;
echo gettype($null); // muestra tipo de dato NULL
echo "<br>";
print_r($array); // para imprimir el contenido del arreglo
echo "<br>";

// Conversión de datos
$numeroStr = "15";
$numeroInt = (int) $numeroStr;
$booleanInt = (int) $boolean;
echo "Conversión de string a int: " . $numeroInt . "<br>";
echo "Conversión de booleano a int: " . $booleanInt . "<br>";
