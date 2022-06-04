<?php

    declare(strict_types=1);

    class Aluno {
        public $nome; // Atributo 01
        public $cpf; // Atributo 02
    }

    class Curso {
        public $nome;
        public $professor;
        public $turno;
    }

    class Professor {
        public $nome;
        public $idade;
        public $sexo;
    }

    class Disciplina {
        public $nome;
        public $professor;
        public $cursos;
    }

?>