<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicioes</title>
</head>
<body>
    <?php
        $idadeJose = 70;
        $idadeJosias = 75;

        if($idadeJose > $idadeJosias){
            echo 'Jose é mais velho<br>';
        }else if($idadeJose === $idadeJosias) {
            echo 'Mesma idade<br>';
        }else{
            echo 'Josias é mais velho<br>';
        }

        if(isset($idadeJose) && isset($idadeJosias)){
            echo 'As idades de jose e josias estão cadastrados<br>';
        }else{
            'As idades de jose e josias nao estao cadastradas devidamente';
        }
    ?>
</body>
</html>