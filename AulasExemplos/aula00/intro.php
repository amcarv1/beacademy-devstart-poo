<?php

    include 'Aluno.php';
    include 'Curso.php';
    include 'Professor.php';


    $a01 = new Aluno;
    $a01->nome = "Joãozinho";
    $a01->cpf = "123.123.123-12";

    $cursoPHP = new Curso;
    $cursoPHP->nome = "Introdução ao PHP";
    $cursoPHP->cargaHoraria = 88;
    $cursoPHP->descricao = "Aprendendo o Básico de PHP.";

    echo "<h1>Aluno: {$a01->nome}</h1>";
?>