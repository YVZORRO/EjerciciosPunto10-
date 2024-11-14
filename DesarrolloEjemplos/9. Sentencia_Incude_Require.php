<?php
// sentencias de include, require include_once, require_once
// los dos tanto include y require incluyen archivos
// pero el require detiene la ejecución si el archivo no se encuentra

// include_once y require_once funcionan igual que los anteriores
//solo aseguran que el archivo solo se incluya una vez

// Simulación de un "archivo_incluido.php"
function saludo() {
    echo "Buenos días estrellitas<br>";
}

const MENSAJE = "Mensaje constante desde el archivo que se incluyo.<br>";

// Incluyendo el archivo con include_once (se simula por aca)
include_once __FILE__;

// Usando la función y la constante
saludo();
echo MENSAJE;

// Incluyendo el "archivo" nuevamente con require (no causa duplicado gracias a include_once)
require_once __FILE__;
// Esto muestra el saludo y mensaje una sola vez debido a la prevención de duplicados de include_once y require_once.




