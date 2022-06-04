<?php

    include "Produto.php";
    include "Categoria.php";

    
    $p1 = new Produto('Tênis para corrida', 299, $c3);
//    $p1->setNome('Tênis para corrida');
//    $pi1->setValor(299);

    $p2 = new Produto('Calça Jeans', 600, $c1);
//    $p2->setNome('Calça Jeans');
//    $p2->setValor(600);

    $p3 = new Produto('Calça Branca', 450, $c1);  
//    $p1->setNome('Calça Branca');
//    $pi1->setValor(450);

    $c1 = new Categoria("Roupas", "Roupas Unissex");
    $c2 = new Categoria("Roupas de Banho", "Toalhas, Toalhas para rosto, etc");
    $c3 = new Categoria("Calçados", "Calçados esportivos, etc");

?>