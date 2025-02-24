<?php
    // inclui arquivo funcoes.php
    include "funcoes.php";

    // declaração de variáveis
    $x = $_POST["x"];
    $y = $_POST["y"];
    $operacao = $_POST["operacao"];

    // verifica se os números são positivos
    if ($x >= 0 && $y >= 0) {
        // verifica o valor da variável "operacao"
        switch ($operacao) {
            case "soma":
                echo "O valor da soma é " . soma($x, $y);
                break;
            case "subtracao":
                echo "O valor da subtração é " . subtracao($x, $y);
                break;
            case "multiplicacao":
                echo "O valor da multiplicação é " . multiplicacao($x, $y);
                break;
            case "divisao":
                echo "O valor da divisão é " . divisao($x, $y);
                break;
            case "resto":
                echo "O valor do resto da divisão é " . resto($x, $y);
                break;
        }
    }
    else echo "Valores inválidos.";

    // link para voltar para a página anterior
    echo '<br /><a href="index.html">Voltar</a>';
?>