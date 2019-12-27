<?php

error_reporting(E_ALL);

$divisor = 0;

try {
    if ($divisor === 0) {
        throw new Exception("Nao e possivel dividir por 0, defina um valor maior que 0", 1);
    }
    
    $valor = 100 / $divisor;

    echo $valor;
} catch (\Throwable $th) {
    echo $th->getMessage();
}

