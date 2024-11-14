<?php

// con Throw se lanza una excepción (error) que interrumpe la ejecución normal del programa
// el Try se usa para envolver código que podría generar una excepción
// Si ocurre una, el control se transfiere al bloque catch
// y con el catch se captura y se maneja la excepción lanzada en el bloque try
//lo que nos permite que el programa continúe sin acabar tan repentinamente
try {
    throw new Exception(" Resultado del uso de excepciones try, catch y throw");
} catch (Exception $e) {
    echo 'Mensaje de prueba : ' . $e->getMessage();
}

