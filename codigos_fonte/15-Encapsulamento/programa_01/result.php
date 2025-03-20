<?php
    // importa a classe
    include "Pessoa.class.php";

    // instancia a classe
    $usuario = new Pessoa();

    // repassa os valores dos atributos
    $usuario->setNome($_POST["nome"]);
    $usuario->setIdade($_POST["idade"]);
    $usuario->setEmail($_POST["email"]);

    // saída de dados
    echo '<b>Nome:</b> ' . $usuario->getNome() . '.<br />';
    echo '<b>Idade:</b> ' . $usuario->getIdade() . '.<br />';
    echo '<b>E-mail:</b> ' . $usuario->getEmail() . '.<br />';
?>