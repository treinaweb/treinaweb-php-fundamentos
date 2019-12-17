<?php

$nome = "Elton Fonseca";
$idade = 28;
$casada = true;
$preco = 39.90;

echo "A variavel nome é do tipo: ";
echo gettype($nome);

$nome = false;

echo "<br>A variavel nome é do tipo: ";
echo gettype($nome);