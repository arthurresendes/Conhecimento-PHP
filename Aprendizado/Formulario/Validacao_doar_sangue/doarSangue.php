<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doar sangue</title>
    <style>
        body{
            text-align: center;
        }

        input{
            margin: 5px;
        }

        #valid{
            cursor: pointer;
            background-color: lightcoral;
            color: black;
        }

    </style>
</head>
<body>
    <h1>Veja se você pode doar sangue</h1>
    <form action="" method="post">
        <label for="idade">Sua idade: </label>
        <input type="number" name="idade" id="idade">
        <br>
        <label for="peso">Seu peso: </label>
        <input type="text" name="peso" id="peso">
        <br>
        <input type="submit" value="Validar" id="valid" name="valid">
    </form>


    <?php
        if(isset($_POST['valid'])){
            $idade = $_POST['idade'];
            $peso = $_POST['peso'];

            if($idade >=16 && $idade < 69 && $peso > 50){
                echo '<p>Pode doar sangue, atende aos requisitos</p>';
            }else{
                echo '<p>Não pode doar sangue, nao atende os requistos</p>';
            }
        }
    ?>

</body>
</html>