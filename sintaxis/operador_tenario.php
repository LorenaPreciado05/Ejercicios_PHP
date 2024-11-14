<?php
//operador tenario
$edad = 17;
$mensaje = ($edad >= 18) ? "Eres mayor de edad." : "Eres menor de edad.";
echo $mensaje;
// Null coalesce
$variable = null;
echo $variable ?? 'No existe';
// Spaceship
echo 5 <=> 10;