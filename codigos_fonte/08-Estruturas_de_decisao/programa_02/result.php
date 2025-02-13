<?php
    // declaração de variáveis
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $altura = $_POST["altura"];

    // troca da vírgula pelo ponto
    $altura = str_replace(",", ".", $altura);

    // estrutura de decisão
    if ($idade>=12 && $altura>=1.2) echo "A entrada de " . $nome . " foi autorizada.";
    else echo "A entrada de " . $nome . " não foi autorizada.";
?>