<?php
    $lista_frutas = [1 => 'Banana', 2 => 'Maça', 3=> 'Uva', 4=> 'Abacaxi'];
    $lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => ['João', 'José']];

    $lista_frutas2 = ['Pera', 'Morango'];

    echo is_array($lista_frutas);
    echo '<br/>';
    print_r(array_keys($lista_frutas));
    echo '<br/>';
    sort($lista_frutas);
    print_r($lista_frutas);
    echo '<br/>';
    echo count($lista_coisas['pessoas']);
    echo '<br/>';
    $lista_frutas_total = array_merge($lista_frutas,$lista_frutas2);
    print_r($lista_frutas_total);



?>