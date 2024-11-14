<?php
#tipos de datos
# boolean
$verdadero = true;
$falso = false;
echo $verdadero;
#Enteros
$entero = 42;
$negativo = -15;
echo $negativo;
#cadena de texto
$texto = "Hola, mundo";
echo $texto;
#flotante
$decimal = 3.1416;
echo $decimal;
# NaN (not a number)
$resultado = sqrt($negativo); # esto genera NaN, ya que la raiz cuadrada de un numero negativo no es real.

if (is_nan($resultado)) {
    echo "el resultado no es un numero";
}
else {
    echo "la raiz cuadrada es: $resultado";
}
#null
$variable_nula = null;
if (is_null($variable_nula)) {
    echo "la variable no tiene valor";
}
#object
class Persona {
    public $nombre;

    public function saludar() {
        echo "<br> Hola, " . $this->nombre;
    }
}

# crear una instancia de la clase persona
$persona = new Persona();
$persona->nombre = "Ana"; # asignar un valor al atributo

#llamar al metodo saludar
$persona->saludar(); #operador de acceso a miembros en PHP, permite acceder al me  todo saludar()