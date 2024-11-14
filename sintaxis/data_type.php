<?php
#tipos de datos
 $number= 5;
 $decimal=12.365;
 $name= "esto es una cadena de carateres";
 $is_false=true;
 $empity= null;

 echo "$number <br> $decimal <br> $name <br> $is_false <br> $empity";

 #gettype para indicar que tipo de dato es
echo gettype($number);

#castear una variable
$casteo= (int)"12";
echo gettype($casteo);