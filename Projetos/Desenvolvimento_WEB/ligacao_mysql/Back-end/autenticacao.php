<?php
    session_start();
    $nome = $_POST['name'];
    $senha = $_POST['pass'];

    if($nome == "Arthur" && $senha == "1234"){
        $_SESSION['logado'] = true;
        header("Location: ../Front-End/menu.html");
        exit();
    }else{
        header("Location: login.html");
        exit();
    }


?>