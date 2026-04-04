<?php
    $lista_frutras = [
        'a' => 'Banana',
        'b' => 'Maça',
        'c' => 'Uva'
    ];

    echo $lista_frutras['a'];
    echo '<br/>';

    echo $lista_frutras['c'];
    echo '<br/>';

    $lista_frutras['d'] = 'Morango';

    echo var_dump($lista_frutras); //Exibe o conteudo e o tipo
    echo '<br/>';


?>