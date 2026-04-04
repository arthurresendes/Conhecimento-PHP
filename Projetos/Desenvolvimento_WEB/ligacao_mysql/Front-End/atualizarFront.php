<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Atualize aqui seu animal</h2>
    <?php $id = $_GET['id']; ?>
    <form action="../Back-end/atualizarBack.php?id=<?php echo $id; ?>" method="post">
            <label for="nomeAnimal">Nome do animal: </label>
            <br>
            <input type="text" id="nomeAnimal" name="nomeAnimal" placeholder="Digite o nome do animal">
            <br>
            <label for="especieAnimal">Especie do animal: </label>
            <br>
            <input type="text" id="especieAnimal" name="especieAnimal" placeholder="Digite qual a especie">
            <br>
            <label for="idadeAnimal">Idade do animal: </label>
            <br>
            <input type="text" id="idadeAnimal" name="idadeAnimal" placeholder="Digite a idade do animal">
            <br>
            <label for="nomeTutor">Nome do tutor: </label>
            <br>
            <input type="text" id="nomeTutor" name="nomeTutor" placeholder="Digite qual o nome do Tutor">
            <br>
            <label for="cpfTutor">CPF do Tutor: </label>
            <br>
            <input type="text" id="cpfTutor" name="cpfTutor" placeholder="Digite qual o CPF">
            <br>
            <label for="emailTutor">Email: </label>
            <br>
            <input type="email" id="emailTutor" name="emailTutor" placeholder="Digite qual o email">
            <br>
            <input type="submit" value="Incluir" id="incluir">
    </form>
</body>
</html>