<?php
#foreach para recorrer arrays
$names = ["luciana", "Maria", "Valentina"];
$cerveza = [
    "nombre" => "corona",
    "alcohol" => 4.5,
    "ciudad" => "colombia"
];

foreach ($cerveza as   $clave=>$beer){
    echo $clave. " = " . $beer. "<br>";
}
