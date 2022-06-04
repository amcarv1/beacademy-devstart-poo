<?php

    declare(strict_types=1);

    class Aluno {
        private string $nome; 
        private string $cpf;
        
        // metodos
        public function getNome(): string
        {
            return $this->nome;
        }

        public function getCpf(): string
        {
            return $this->cpf;
        }

        public function setNome(string $novoNome): void
        {
            $this->nome = $novoNome;
        }

        public function setCpf(string $novoCpf): void
        {
            $this->cpf = $novoCpf;
        }
    }

    class Curso 
    {
        private string $nome; 
        private string $descricao;
        private int $cargaHoraria; 

        // metódos
        public function getNome(): string
        {
            return $this->nome;
        }

        public function getDescricao(): string
        {
            return $this->descricao;
        }

        public function getCargaHoraria(): int
        {
            return $this->cargaHoraria;
        }

        public function setNome(string $novoNome): void
        {
            $this->nome = $novoNome;
        }

        public function setDescricao(string $novaDescricao): void
        {
            $this->descricao = $novaDescricao;
        }

        public function setCargaHoraria(string $novaCargaHoraria): void
        {
            $this->cargaHoraria = $novaCargaHoraria;
        }
    }

    class Professor 
    {
        private string $nome; 
        private string $cpf;
        private float $salario; 

        // metodos
        public function getNome(): string
        {
            return $this->nome;
        }

        public function getCpf(): string
        {
            return $this->cpf;
        }

        public function getSalario(): float
        {
            return $this->salario;
        }

        public function setNome(string $novoNome): void
        {
            $this->nome = $novoNome;
        }

        public function setCpf(string $novoCpf): void
        {
            $this->cpf = $novoCpf;
        }

        public function setSalario(string $novoSalario): void
        {
            $this->salario = $novoSalario;
        }
    }


?>