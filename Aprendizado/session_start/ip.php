<?php
    session_start();
    if(!isset($_SESSION['logado'])){
        header('location: login.php');
        exit();
    }

    $VAR = shell_exec('ipconfig');
    echo "<h2> Seu ip: </h2>";
    echo "<pre>$VAR</pre>";
    echo "<br><br>";
    echo "<a href=menu.php>Voltar ao menu</a>"

?>