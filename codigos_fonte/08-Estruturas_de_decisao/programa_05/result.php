<?php
    // declaração de variáveis
    $sala = $_POST["sala"];

    // estrutura de decisão switch...case
    switch ($sala) {
        case "1":
            echo "A Roda Quadrada.";
            break;
        case "2":
            echo "A Volta Dos Que Não Foram.";
            break;
        case "3":
            echo "As Tranças do Rei Careca.";
            break;
        case "4":
            echo "Poeira em Alto Mar.";
            break;
        case "5":
            echo "A Vingança do Peixe Frito.";
            break;
        default:
            echo "Sala inexistente.";
    }

    // link para a página inicial
    echo '<br><a href="index.html">Selecionar outra sala</a>';
?>