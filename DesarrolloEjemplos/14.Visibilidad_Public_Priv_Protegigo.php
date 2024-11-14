<?php

class Visibilidad
{
    public $Atr_publica = "La visibilidad pública es accesible desde cualquier parte <br>";
    private $Atr_privada = "La visibiliad privada solo es accesible dentro de la clase <br>";
    protected $Atr_protegida = "La visibilidad protegida solo es accesible desde la clase y sus herederas <br>";

    public function mostrarPrivada() // metodo para poder mostrar la visibilidad privada
    {
        return $this->Atr_privada;
    }

    public function mostrarProtegida() // metodo para poder mostrar la visibilidad protegida
    {
        return $this->Atr_protegida;
    }
}
// se crea el objeto para imprimir atributos
$objeto = new Visibilidad();
echo $objeto->Atr_publica; // muestra el mensaje visibilidad publica
echo $objeto->mostrarPrivada(); // muestra la propiedad privada a través del metodo público
echo $objeto->mostrarProtegida(); // muestra la propiedad protegida a través del metodo público

