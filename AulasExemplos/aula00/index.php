<?php

    include 'Aluno.php';
    include 'Curso.php';
    include 'Professor.php';

    $p1 = new Professor;
    $p1->nome = "Alessandro";
    $p1->cpf = "123.123.123-13";
    $p1->salario = 1000;

    echo "<h1>Nome do professor: {$p1->nome}</h1>";
    echo "<h1>Cpf do professor: {$p1->cpf}</h1>";
    echo "<h1>Salario do professor: {$p1->salario}</h1>";

    var_dump($p1);