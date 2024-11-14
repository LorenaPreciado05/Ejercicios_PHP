<?php
$beer = new stdClass();
$beer->name = 'heineken';
$beer->alcohol =8.5;

$beer->name = 'corona <br>';

//echo $beer-> name;

//conversion de arrays a objetos
$arr = (array) $beer;
//echo $arr['alcohol'];
$arrLocation = [
    'address' => 'calle del mar',
    'country' => 'mexico'
] ;
$objLocation = (object) $arrLocation;

print_r( $objLocation);