<?php

$escola = "Treinaweb";
$curso = ["PHP", "C#", "Java"];

$frase = "Faça o curso de " . $curso . " na escola " . $escola;

$string1 = "Faça o curso de {$curso[1]} na escola {$escola}";
$string2 = 'Faça o curso de $curso na escola $escola';

echo $string1;