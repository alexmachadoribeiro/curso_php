<?php
    // nome da classe
    class Pessoa {
        // atributos
        public $nome;
        public $email;
        public $idade;

        // método
        function saudar() {
            return "Olá, eu sou " . $this->nome . ", tenho " . $this->idade . " anos, meu e-mail é " . $this->email . ", e é um prazer estar aqui!";
        }
    }
?>