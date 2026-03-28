<?php
    session_start();
    if(!isset($_SESSION['logado'])){
        header('location: login.php');
        exit();
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        body{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <h2>Escolha qual comando ver</h2>
    <a href="ip.php">IP</a><br>
    <a href="dir.php">Diretorios</a><br>
    <a href="system.php">Configurações de sistema</a><br>
    <a href="netsh.php">Net</a><br>
</body>
</html>