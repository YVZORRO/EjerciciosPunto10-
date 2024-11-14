<?php
// Las constantes de clase son valores fijos que no cambian y se definen con la palabra clave const
class MiClaseConstante // nombre de la clase
{
    const CONSTANTE = 'Representación para la constante de una clase';

    public function mostrarConstante() // En el metodo para mostrar la constante
    {
        echo self::CONSTANTE; // usamos self::CONSTANTE para acceder a la constante CONSTANTE de la clase.
    } // self se usa para referirse a constantes y métodos estáticos
}
// se instancia y se muestra la constante
$obj = new MiClaseConstante();
$obj->mostrarConstante();

