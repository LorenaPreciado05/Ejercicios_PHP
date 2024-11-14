<?php
#bucle for
for ($i =0; $i < 10; $i++){
    echo $i;
}
#bucle for con sentencia if
for ($i =1; $i < 10; $i++){
    if ($i % 2 == 0){
        continue;#continue para indicarle al sistema que siga con la ejecucion
    }
    echo "<br> $i";
}

?>