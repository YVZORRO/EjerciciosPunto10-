<?php
// Array indexado
// utiliza índices numéricos para acceder a los elementos y empieza desde el indice 0....
$colombia = ["Amarillo", "Azul", "Rojo"];
// Array asociativo
// cada elemento se accede mediante una clave, permite asociar valores a nombres
$persona = [
    "nombre" => "Vanesa",
    "edad" => 20,
    "ciudad" => "Sogamoso"
];
// Array multidimensional
// Son arrays que contienen otros arrays como elementos
$productos = [
    ["nombre" => "Laptop", "precio" => 1500000],
    ["nombre" => "Tablet", "precio" => 846700],
    ["nombre" => "Teléfono", "precio" => 300000]
];
// para la concatenación se utiliza el punto junto con los valores
echo "La persona se llama " . $persona["nombre"] . " y vive en " . $persona["ciudad"] . ".<br>";

// Operadores aritméticos
$precio_total = $productos[0]["precio"] + $productos[1]["precio"];
echo "El precio total del computador y la tablet es de: $" . $precio_total . "<br>";

// Uso de operadores de comparación y lógicos
if ($persona["edad"] >= 18 && $persona["ciudad"] == "Sogamoso") {
    echo $persona["nombre"] . " es mayor de edad y vive en Sogamoso.<br>";
}
// Impresión del color 2 del array colombia que esta en la posición 1
echo "El segundo color de la bandera de colombia es: " . $colombia[1];

// asi se hace un comentario :v