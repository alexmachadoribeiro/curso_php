<?php
    // função
    function lotePreco($valorMetro, $largura, $comprimento) {
        // calcula a área do lote
        $area = $largura*$comprimento;

        // calcula o preço do lote e retorna
        return $valorMetro*$area;
    }

    // declaração de variáveis
    $valorMetro = $_POST["valorMetro"];
    $largura = $_POST["largura"];
    $comprimento = $_POST["comprimento"];

    // exibe o valor do terreno
    echo "<b>Valor do terreno:</b> R$ " . lotePreco($valorMetro, $largura, $comprimento) . ".";
?>