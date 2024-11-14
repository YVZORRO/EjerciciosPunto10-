<?php
// uso de for, foreach, while, do..while, break, continue
// Definición de excepciones personalizadas
class LibroDaniadoException extends Exception
{
}

class LibroReservadoException extends Exception
{
}

// Inventario de la biblioteca con libros y su estado
$inventarioLibros = [
    ["titulo" => "El Principito", "estado" => "nuevo", "disponible" => true, "reservado" => false],
    ["titulo" => "Cien años de soledad", "estado" => "nuevo", "disponible" => true, "reservado" => true],
    ["titulo" => "Moby Dick", "estado" => "dañado", "disponible" => true, "reservado" => false],
    ["titulo" => "1984", "estado" => "nuevo", "disponible" => false, "reservado" => false],
    ["titulo" => "Don Quijote", "estado" => "nuevo", "disponible" => true, "reservado" => false]
];

// Función para verificar la disponibilidad de un libro
function verificarDisponibilidad($libro)
{
    if ($libro["estado"] === "dañado") {
        throw new LibroDaniadoException("El libro '{$libro['titulo']}' está dañado y no puede prestarse.");
    }
    if ($libro["reservado"]) {
        throw new LibroReservadoException("El libro '{$libro['titulo']}' está reservado.");
    }
    if (!$libro["disponible"]) {
        return false;
    }
    return true;
}

// Procesar el inventario con un bucle foreach para verificar cada libro
echo "Verificando disponibilidad de libros:<br>";
foreach ($inventarioLibros as $libro) {
    try {
        if (verificarDisponibilidad($libro)) {
            echo "El libro '{$libro['titulo']}' está disponible para préstamo.<br>";
        } else {
            echo "El libro '{$libro['titulo']}' no está disponible actualmente.<br>";
        }
    } catch (LibroDaniadoException $e) {
        echo $e->getMessage() . "<br>";
    } catch (LibroReservadoException $e) {
        echo $e->getMessage() . "<br>";
    }
}

echo "<br>Revisión completa del inventario con ciclo while y break:<br>";
$i = 0;
while ($i < count($inventarioLibros)) {
    $libro = $inventarioLibros[$i];
    if (!$libro["disponible"]) {
        echo "El libro '{$libro['titulo']}' no está disponible y se omite.<br>";
        $i++;
        continue; // Saltar a la siguiente iteración si el libro no está disponible
    }
    if ($libro["estado"] === "dañado") {
        echo "El libro '{$libro['titulo']}' está dañado y requiere reparación.<br>";
        break; // Detener el ciclo si se encuentra un libro dañado
    }
    echo "El libro '{$libro['titulo']}' está en buen estado y disponible para préstamo.<br>";
    $i++;
}

echo "<br>Usando el ciclo for para contar y mostrar libros disponibles:<br>";
$totalDisponibles = 0;
for ($i = 0; $i < count($inventarioLibros); $i++) {
    if ($inventarioLibros[$i]["disponible"]) {
        $totalDisponibles++;
        echo "Libro disponible: '{$inventarioLibros[$i]['titulo']}'<br>";
    }
}
echo "Total de libros disponibles: $totalDisponibles<br>";

echo "<br>Usando el ciclo do...while para mostrar un mensaje repetido:<br>";
$intentos = 0;
do {
    echo "Intento #" . ($intentos + 1) . ": Revisión de sistema de inventario en proceso...<br>";
    $intentos++;
} while ($intentos < 3);






