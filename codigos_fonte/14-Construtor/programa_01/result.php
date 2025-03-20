<?php
    // importa a classe
    include "Pessoa.class.php";

    // instancia a classe
    $usuario = new Pessoa("", 0);

    // repassa os valores para os atributos
    $usuario->nome = $_POST['nome'];
    $usuario->idade = $_POST['idade'];

    // saída de dados
    echo '<b>Nome:</b> ' . $usuario->nome . '.<br />';
    echo '<b>Idade:</b> ' . $usuario->idade . '.<br />';
?>