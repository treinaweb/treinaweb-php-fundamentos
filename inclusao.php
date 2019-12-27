<?php

error_reporting(E_ALL);

echo "inicio do arquivo inclusao.php<br>";

include_once "variaveis.php";
echo "<br>";

echo "<br>estou mostrando a variavel nome no arquivo inclusao.php: $nome"; 

include_once "funcoes/personalizadas.php";
echo "<br>";



echo "<br>estou chamando a funcao somar no arquivo inclusao.php: " . somar(10, 10); 

echo "<br>fim do arquivo inclusao.php";