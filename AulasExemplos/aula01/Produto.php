<?php

    class Produto 
    {
        // Atributos
        private string $nome;
        private float $preco;

        // Métodos
        public function getNome(): string 
        {
            return $this->nome;
        }

        public function setNome(string $novoNome): void 
        {
            $this->nome = $novoNome;
        }

        public function getPreco(): float 
        {
            return $this->preco;
        }

        public function setPreco(float $novoPreco): void 
        {
            if ($novoPreco < 0) {
                die("Valor não pode ser negativo!");
            }
            
            $this->preco = $novoPreco;
        }
    }

?>