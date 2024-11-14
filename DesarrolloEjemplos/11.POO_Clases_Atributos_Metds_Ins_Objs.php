<?php
// Ejemplo de programacion orientada a objetos (POO)

class Persona // nombre de la clase
{
    public $nombre; // atributo de caracter publico
    private $edad; // atributo de caracter privado
    public function __construct($nombre, $edad) // con el metodo __construct se usa para inicializar un
        // objeto con un nombre y una edad
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar() // metodo para hacer una accion la de saludar
    {
        return "Hola, soy $this->nombre y tengo $this->edad años.";
    }
}
// se instancia un objeto osea  y se muestra la accion
$persona = new Persona("Yineth", 20);
echo $persona->saludar();

