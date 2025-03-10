<?php
    // importa outro arquivo
    include "conexao.php";

    // declaração de variáveis
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $profissao = $_POST['profissao'];

    // faz a conexão com o banco
    $conn = conexao();

    // cadastra novo usuário
    inserirUsuario($nome, $email, $profissao);
?>