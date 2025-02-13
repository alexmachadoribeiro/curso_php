<?php
    // declaração de variáveis
    $nome = $_POST["nome"];
    $nota = $_POST["nota"];

    // trocando a vírgula por ponto
    $nota = str_replace(",", ".", $nota);

    // valida a nota
    if ($nota >= 0 && $nota <= 10) {
        // avalia o aluno de acordo com a nota
        if ($nota >= 7) echo "O aluno " . $nome . " foi aprovado com nota " . $nota . ".";
        else if ($nota >= 5) echo "O aluno " . $nome . " ficou de recuperação com nota " . $nota . ".";
        else echo "O aluno " . $nome . " está reprovado com nota " . $nota . ".";
    }
    else echo "Nota do aluno " . $nome . " informada é inválida.";
?>