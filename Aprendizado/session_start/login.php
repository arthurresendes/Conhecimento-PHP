<?php
    session_start();
    $NOME= $_POST['nm'];
    $SENHA = $_POST['se'];
    if($NOME == 'Arthur' && $SENHA == '123'){
        $_SESSION['logado'] = true;
        header('location: menu.php');
        exit();
    }

    // php -S localhost:8000 -> Para executar localhost
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="nm">Nome: </label>
        <input type="text" name="nm" id="nm"><br><br>
        <label for="se">Senha: </label>
        <input type="password" name="se" id="se"><br><br>
        <br><br>
        <input type="submit" value="Validar">
    </form>
</body>
</html>