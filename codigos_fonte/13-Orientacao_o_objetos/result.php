<?php
    // importando a classe
    include "Pessoa.class.php";

    // instanciando a classe Pessoa
    $pessoa = new Pessoa();

    // repassando os valores informados pelo usuário para os atributos do objeto
    $pessoa->nome = $_POST['nome'];
    $pessoa->email = $_POST['email'];
    $pessoa->idade = $_POST['idade'];

    // saída de dados
    echo '<b>Nome:</b> ' . $pessoa->nome . '.<br />';
    echo '<b>E-mail:</b> ' . $pessoa->email . '.<br />';
    echo '<b>Idade:</b> ' . $pessoa->idade . '.';

    // executando a função
    echo $pessoa->saudar();
?>