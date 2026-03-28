<?php
    session_start();
    if(!isset($_SESSION['logado'])){
        header('location: login.php');
        exit();
    }

    $VAR3 = shell_exec('systeminfo');
    echo "<h2>Informações de sistema: </h2>";
    echo "<pre>$VAR3</pre>";
    echo "<a href=menu.php>Voltar ao menu</a>"
?>