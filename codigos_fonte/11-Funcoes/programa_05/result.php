<?php
    // função que calcula o imc
    function imc($peso, $altura) {
        return $peso/$altura**2;
    }

    // declaração de variáveis e conversão da vírgula para ponto
    $peso = str_replace(",", ".", $_POST["peso"]);
    $altura = str_replace(",", ".", $_POST["altura"]);

    // exibe o valor do imc do usuário
    echo "O valor do seu IMC é: " . round(imc($peso, $altura), 2) . ".";
?>