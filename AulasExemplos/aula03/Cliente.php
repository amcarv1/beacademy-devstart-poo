<?php

declare(strict_types=1);

final class Cliente extends Usuario
{
    private string $dataCadastro; // ok

    public function getDataCadastro(): string 
    {
        return $this->dataCadastro;
    }

    public function setDataCadastro(string $novaDataCadastro): void
    {
        $this->dataCadastro = $novaDataCadastro;
    }
}