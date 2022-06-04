<?php

abstract class Usuario
{
    private string $nome; 
    private string $email;  
    private string $senha; 
    private string $cpf; 

    public function __construct(string $email, string $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getNome(): string 
    {
        return $this->nome;
    }

    public function setNome(string $novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function getEmail(): string 
    {
        return $this->email;
    }

    public function setEmail(string $novoEmail): void
    {
        $this->email = $novoEmail;
    }

    public function getSenha(): string 
    {
        return $this->senha;
    }

    public function setSenha(string $novaSenha): void
    {
        $this->senha = $novaSenha;
    }

    public function getCpf(): string 
    {
        return $this->cpf;
    }

    public function setCpf(string $novoCpf): void
    {
        $this->cpf = $novoCpf;
    }
}