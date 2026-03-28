<?php
        $nome = $_POST['nm'];
        $senha = $_POST['se'];
        if($nome == "Arthur" && $senha == "123"){
            echo "Logado ". $nome . " bem-vindo";
        }else{
            echo 'Usuario ou Senha incorreta';
        }
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <form action="form.php" method="post">
        <input type="text" name="nm" id="nm">
        <input type="password" name="se" id="se">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>