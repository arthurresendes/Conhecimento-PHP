<?php
    $lista_aleatorios =[];

    for($i = 0; $i < 6; $i++){
        $lista_aleatorios[] = rand(0,60);
    }

    for($i = 0; $i < 6; $i++){
        echo $lista_aleatorios[$i];
        echo '<br/>';
    }

?>