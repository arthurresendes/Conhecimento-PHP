<?php
    session_start();
    if(!isset($_SESSION['logado'])){
        header('location: login.php');
        exit();
    }

    $VAR2 = shell_exec('dir');
    echo "<h2> Seus diretorios: </h2>";
    echo "<pre>$VAR2</pre>";
    echo "<br><br>";
    echo "<a href=menu.php>Voltar ao menu</a>"

?>