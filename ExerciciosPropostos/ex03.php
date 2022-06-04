<?php

    declare(strict_types=1);

    class Aluno {
        private $nome; 
        private $cpf; 

        public function __construct(string $novoNome, string $novoCpf) 
        {
            $this->nome = $novoNome;
            $this->cpf = $novoCpf;
        }
    }

    class Curso {
        private $nome;
        private $professor;
        private $turno;

        public function __construct(string $novoNome, string $novoProfessor, string $novoTurno) 
        {
            $this->nome = $novoNome;
            $this->professor = $novoProfessor;
            $this->turno = $novoTurno;          
        }
    }

    class Professor {
        private $nome;
        private $idade;
        private $sexo;

        public function __construct(string $novoNome) 
        {
            $this->nome = $novoNome;
        }
    }

    class Disciplina {
        private $nome;
        private $professor;
        private $cursos;

        public function __construct(string $novoNome) 
        {
            $this->nome = $novoNome; 
        }
    }

?>