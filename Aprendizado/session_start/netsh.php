<?php
    session_start();
    if(!isset($_SESSION['logado'])){
        header('location: login.php');
        exit();
    }

    $VAR = shell_exec('netsh');
    echo "<h2> Suas conexões: </h2>";
    echo "<pre>$VAR</pre>";
    echo "<br><br>";
    echo "<a href=menu.php>Voltar ao menu</a>"

?>