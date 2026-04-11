<?php
    $lista_frutas = [1 => 'Banana', 2 => 'Maça', 3=> 'Morango', 4=> 'Uva'];
    $lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => ['João', 'José']];

    $existe = in_array('Uva', $lista_coisas['frutas']);


    // array_search
    if($existe != null){
        echo 'Existe o valor Uva na lista';
    }else{
        echo 'Sem uva na lista';
    }
?>