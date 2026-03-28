<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>
    <?php
        $nome = "Arthur";
        $idade = 19;
        $peso = 72.25;
        $fumante = false;
    ?>

    <h1>Ficha cadastral: </h1>
    <br>
    <p>Nome: <?=  $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?=  $peso ?></p>
</body>
</html>