<?php
    // declaração de variáveis
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    // operador ternário
    $result = $idade >= 18 ? " é maior de idade." : " é menor de idade.";

    // saída
    echo $nome . $result;
?>