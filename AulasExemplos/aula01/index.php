<?php

    include "Produto.php";

    $p2 = new Produto;
    $p2->setNome("café");
    echo $p2->getNome();
    $p2->setPreco(1000);
    echo $p2->getPreco();

    /*
    $p1 = new Produto;
    $p1->nome = "Tênis";
    $p1->preco = 420.32;

    $p2 = new Produto;
    $p2->nome = "Calça";
    $p2->preco = -600;
    */

?>