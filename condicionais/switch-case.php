<?php

$a = 4;

switch ($a) {
    case 0:
        echo "tenho o valor 0";
        break;
    case 1:
        echo "tenho o valor 1";
        break;
    case 2:
    case 3:
    case 4:
    case 5: 
        echo "tenho um valor de 2 a 5";
        break;
    default:
        echo "tenho outro valor";
        break;
}

echo "<br>";

$curso = 'PHP';

switch ($curso) {
    case 'PHP':
        echo "curso de php";
        break;
    case 'JAVA':
        echo "curso de java";
        break;
    default:
        echo "outro curso";
        break;
}

