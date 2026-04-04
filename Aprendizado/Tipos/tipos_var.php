<?php
    $nome = "Arthur";
    $idade = 19;
    $salario = 20000.20;
    $empregado = true;

    echo gettype($nome);
    echo '<br/>';
    echo gettype($idade);
    echo '<br/>';
    echo gettype($salario);
    echo '<br/>';
    echo gettype($empregado);
    echo '<br/>';

    $salario = (float) $salario;
    echo gettype($salario);
    echo '<br/>';

?>