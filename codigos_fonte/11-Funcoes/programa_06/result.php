<?php
    // função recursiva
    function fatorial($numero) {
        return $numero == 0 ? 1 : $numero*fatorial($numero-1);
    }

    // declaração de variável
    $numero = $_POST["numero"];

    // exibe resultado na tela
    echo "O resultado do fatorial de " . $numero . " é " . fatorial($numero);
?>