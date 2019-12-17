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

$numeros = [
    [1, 2, 3, 4],
    [5, 6, 7, 8, 9],
    [10, [11, 12, 13]]
];

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
        "status" => false
    ]
];

echo $cursos["java"]["nome_curso"];


