<?php
$productos = [
    "Laptop",
    "Teclado",
    "Mouse"
];
$producto = [
    "Laptop 2",
    "Teclado 2",
    "Mouse 2"
];

//$productoMixed = array_merge($productos, $producto); //une el contenido de los arrays
//print_r($productoMixed); //mustra de manera legible el contenid de un array

array_push($productos, "Procesador");//agrega un elemento a un array
$producto = array_pop($productos);//elimina un elemento de un array
echo  count($productos); //cuenta los elementos de un array

if (in_array("Laptop", $productos)){//busca en el array el parametro
    echo "<br> existe";
}