<?php
    $data_atual = date('d/m/Y H:i');

    echo $data_atual;
    echo '<br/>';
    echo date_default_timezone_get();
    date_default_timezone_set('America/Sao_Paulo');
    echo '<br/>';
    echo date_default_timezone_get();
    echo '<br/>';
    echo date('d/m/Y H:i')
    


?>