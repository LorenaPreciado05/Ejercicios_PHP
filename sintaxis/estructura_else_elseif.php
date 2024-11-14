<?php
#estructura else y elif
$age=70;
if ($age == 18){
    echo "Eres mayor de edad";
}
elseif ($age > 18 && $age < 60){ #if compuesto
    echo "Eres mayor de 18";
}
elseif ($age > 61){
    echo "Eres de la tercera edad";
}
else {
    echo "Eres menor de edad";
}
?>