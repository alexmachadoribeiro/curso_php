<?php
    // função
    function msg($empresa) {
        return $empresa . " agradece a sua preferência!";
    }

    // declaração de variável
    $empresa = $_POST["empresa"];

    // exibindo a mensagem da função na saída de dados
    echo msg($empresa);
?>