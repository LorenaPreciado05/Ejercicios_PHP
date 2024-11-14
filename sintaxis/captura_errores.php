<?php
//captura de errores
function dividir($dividendo, $divisor) {
    if ($divisor == 0) {
        throw new Exception("Error: División por cero no permitida.");
    }
    return $dividendo / $divisor;
}

try {
    echo dividir(10, 2);
    echo dividir(10, 0); // arroja el error
} catch (Exception $e) {
    echo "Excepción capturada: " . $e->getMessage();
}
