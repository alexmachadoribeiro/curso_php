<?php
    // declaração de array
    $dados = ["Nome" => "Alex Machado", "Idade" => 40, "Profissão" => "Programador"];

    // percorrendo o array
    foreach ($dados as $campo => $valor) {
        echo $campo . ": " . $valor . ".<br>";
    }
?>