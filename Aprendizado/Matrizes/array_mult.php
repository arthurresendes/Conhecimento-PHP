<?php
    $lista_coisas = [];

    $lista_coisas['frutas'] = array(1 => 'Banana', 2 => 'Maça', 3=> 'Morango', 4=> 'Uva');

    $lista_coisas['pessoas'] = array(1 => 'João', 2=> 'José', 3 => 'Maria');

    print_r($lista_coisas);
    echo "<br/>";
    print_r($lista_coisas['frutas']);
    echo "<br/>";
    print_r($lista_coisas['pessoas']);
?>