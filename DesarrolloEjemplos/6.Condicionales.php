<?php
// Ejemplo del uso de if, elseif y else
$age = 20;
if($age == 18){
    echo "Eres mayor de edad";
} else if ($age > 18){
    echo "Eres mayor a 18"; // muestra esta opcion porque no se cumple la primera sentencia
}else{
    echo "Eres menor de edad";
}

echo "<br>";
// Ejemplo del uso de la sentencia switch
$edad = 14;

switch ($edad){
    case 1:
        echo " \n Tiene 1 año \n ";
        break;
    case 14:
        echo "\n Tiene 14\n ";
        break;
}
echo "<br>";
// Ejemplo con operador ternario
// el valor falso se toma despues de los dos puntos
$value = true ? " \n Verdadero \n " : " \n Falso \n ";
echo $value;
echo "<br>";

// Ejemplo con Null coalesce
// El operador de fusión ?? se usa para verificar si una variable es null
$usuario = null;
echo "Bienvenido, " . ($usuario ?? "Invitado") . "<br>";

// Ejemplo con operador Spaceship
// compara dos valores y devuelve -1 si el valor izquierdo es menor, 0 si son iguales y 1 si el valor izquierdo es mayor.
$valor1 = 7;
$valor2 = 7;
$resultado = $valor1 <=> $valor2;
echo "<br>";
if ($resultado === -1) {
    echo "$valor1 es menor que $valor2<br>";
} elseif ($resultado === 1) {
    echo "$valor1 es mayor que $valor2<br>";
} else {
    echo "$valor1 es igual a $valor2<br>";
}