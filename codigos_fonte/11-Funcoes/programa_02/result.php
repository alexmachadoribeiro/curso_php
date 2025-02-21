<?php
    // função
    function msg($empresa) {
        echo $empresa . " agradece a sua preferência!";
    }

    // declaração de variável
    $empresa = $_POST["empresa"];

    // execução da função
    msg($empresa);
?>