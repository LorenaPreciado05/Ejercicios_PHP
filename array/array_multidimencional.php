<?php
#array multidimencional
$productos = [
    ["nombre" => "Laptop", "precio" => 1500],
    ["nombre" => "Teclado", "precio" => 30]
];
#echo $productos[0]["nombre"];
foreach ($productos as $producto){
    foreach ($producto as $key => $value){
        echo $key. ": ". $value. "<br>";
    }
}