<?php
    $mega_sena = [];
    for($i = 0; $i < 5; $i++){
        $mega_sena[] = rand(1,60);
    }

    foreach($mega_sena as $numeros){
        echo $numeros;
        echo '<br/>';
    }
?>