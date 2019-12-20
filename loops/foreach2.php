<?php

$cursos = [
    "php" => [
        "nome_curso" => "Curso de PHP Fundamentos",
        "versao_ferramenta" => 7.4,
        "carga_horaria" => 40,
        "status" => true
    ],
    "java" => [
        "nome_curso" => "Curso de Java Fundamentos",
        "versao_ferramenta" => 11.4,
        "carga_horaria" => 30,
        "status" => true
    ],
    "C#" => [
        "nome_curso" => "Curso de C# Fundamentos",
        "versao_ferramenta" => 5,
        "carga_horaria" => 60,
        "status" => true
    ],
    "javascript" => [
        "nome_curso" => "Curso de Javascript Fundamentos",
        "versao_ferramenta" => 11.4,
        "carga_horaria" => 30,
        "status" => false
    ],
];


foreach ($cursos as $curso) {

    if ($curso['status'] == false) {
        continue;
    }

    echo $curso['nome_curso'];
    echo "<br>";
    echo "Versao da ferramenta: " . $curso['versao_ferramenta'];
    echo "<br>";
    echo "Carga horaria: " . $curso['carga_horaria'];
    echo "<br>";
    echo "Status: " . $curso['status'];
    echo "<br><br>";
}