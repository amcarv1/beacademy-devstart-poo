<?php

    include "Validar.php";
    include "ValidarBR.php";

    $br = new ValidarBR();
    $us = new ValidarUS();

    $cpf = '12345678910111';
    $br->validarDocumento($cpf);

    $docX = '1234567891011';
    $us->validarDocumento($docX);