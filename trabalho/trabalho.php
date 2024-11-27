<?php

$notas = [
    [
        "nome" => "Maria",
        "materias" => [
            "mat" => [0, 0],
            "port" => [6, 6],
            "hist" => [10, 4],
            "geo" => [7, 6]
        ]
    ],
    [
        "nome" => "João",
        "materias" => [
            "mat" => [10, 6],
            "port" => [6, 3],
            "hist" => [1, 4],
            "geo" => [6, 4]
        ]
    ],
    [
        "nome" => "Gabriel",
        "materias" => [
            "mat" => [6, 2],
            "port" => [8, 4],
            "hist" => [4, 4],
            "geo" => [6, 8]
        ]
    ],
];

if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];
} else {
    $nome = '';
}

if ($nome == '') {
    echo "Por favor, insira um nome.";
    exit;
}

$alunoEncontrado = false;

foreach ($notas as $aluno) {
    if ($aluno["nome"] == $nome) {
        $alunoEncontrado = true;
        foreach ($aluno["materias"] as $materia => $nota) {
            $media = ($nota[0] + $nota[1]) / 2;
            if ($media >= 5) {
                echo "Aprovado em $materia com média $media<br>";
            } else {
                echo "Reprovado em $materia com média $media<br>";
            }
        }
        break;
    }
}

if (!$alunoEncontrado) {
    echo "Aluno inexistente.";
}

?>