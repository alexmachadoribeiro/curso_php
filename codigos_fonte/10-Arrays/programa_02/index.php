<?php
    // array
    $estados = ["Distrito Federal", "Goiás", "Rio de Janeiro", "São Paulo", "Minas Gerais"];

    // contador
    $cont = 0;

    // mostrando os valores do array na tela usando o while
    while ($cont < count($estados)) {
        echo $estados[$cont] . "<br>";
        $cont++;
    }
?>