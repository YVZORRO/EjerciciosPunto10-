<?php
// $_POST, $_GET, $_SESSION, $_COOKIE

// El metodo POST se utiliza para enviar datos de manera segura
// ya que no se muestran en la URL.
// En l metodo GET Los datos se envían en la URL
// lo que los hace visibles en la barra de direcciones del navegador
// Session sirve para mantener datos temporales
// como el inicio de sesión o el carrito de compras
// con COOKIE nos permite almacenar datos en el navegador del usuario mediante cookies
// las cookies es informacion que se guarda para futuras solicitudes

echo $_POST['nombre'] ?? 'No se ha enviado nombre';
session_start();
$_SESSION['usuario'] = 'Juan';
echo $_SESSION['usuario'];

