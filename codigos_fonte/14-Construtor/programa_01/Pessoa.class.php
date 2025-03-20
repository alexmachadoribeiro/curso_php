<?php
    // classe Pessoa
    class Pessoa {
        // atributos
        public $nome;
        public $idade;

        // método construtor
        function __construct($nome, $idade) {
            $this->nome = $nome;
            $this->idade = $idade;
        }
    }
?>