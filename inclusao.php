<?php

echo "inicio do arquivo inclusao.php<br>";

include "variaveis.php";

echo "<br>estou mostrando a variavel nome no arquivo inclusao.php: $nome"; 

include "funcoes/personalizadas.php";

echo "<br>estou chamando a funcao somar no arquivo inclusao.php: " . somar(10, 10); 

echo "<br>fim do arquivo inclusao.php";