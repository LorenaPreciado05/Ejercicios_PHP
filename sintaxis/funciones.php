<?php
#funciones

hi("Lorena");
echo add(11,28);
function hi($name)
{
    echo  "Hola $name";
}
function add ( $a, $b)
 {
    $result = $a +$b;#esta linea puede eliminarse y ahorrar esta variable
    return $result;
}
//return
function obtenerMensaje() {
    return "<br> Este es un mensaje de retorno. <br>";
}

echo obtenerMensaje();
// argumentos variables
function sumarTodos(...$numeros) {
    $suma = 0;
    foreach ($numeros as $num) {
        $suma += $num;
    }
    return $suma;
}
echo sumarTodos(5, 10, 15, 20);
?>