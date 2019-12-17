<?php

$linguagens = ["PHP", "C#", "Java"];

$linguagens2 = array("PHP", "C#", "Java");

$curso = ["Curso de PHP Fundamentos", 7.4, 40, true];

$curso = [
    "nome_curso" => "Curso de PHP Fundamentos",
    "versao_ferramenta" => 7.4,
    "carga_horaria" => 40,
    "status" => true
];

echo $curso["nome_curso"];
echo "<br>";
echo $curso["versao_ferramenta"];
echo "<br>";
echo $curso["carga_horaria"];
echo "<br>";
echo $curso["status"];



