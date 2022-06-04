<?php

    include "Usuario.php";
    include "Cliente.php";
    include "Gestor.php";
    include "GestorGeral.php";
    include "ClienteVip.php";
    include "Validar.php";

    $c1 = new Cliente('chiquim@email.com', '123456');
    $c1->setNome("Chiquim");

    $cpf = '123456789';
    $validador = new Validar();
    $validar->validarCpf($cpf);

    $g1 = new Gestor('zezim@email.com', '123123123', 6000);
    $g1->setNome("Joaquim");

    $gg1 = new GestorGeral("'maria@email.com", '999999', 9321.0);

    var_dump($c1);
    var_dump($g1);
    var_dump($gg1);

    