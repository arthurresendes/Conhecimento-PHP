<?php
    require_once 'connection.php';

    $id = $_GET['id'];

    $nome = $_POST['nomeAnimal'];
    $especie = $_POST['especieAnimal'];
    $idade = $_POST['idadeAnimal'];
    $nomeTutor = $_POST['nomeTutor'];
    $cpf =  $_POST['cpfTutor'];
    $email = $_POST['emailTutor'];

    $sql = "UPDATE Animais SET nome = ?, especie = ?,idade = ?, nomeTutor = ?,cpf = ?,email = ? WHERE id =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisssi", $nome, $especie, $idade, $nomeTutor, $cpf, $email, $id);
    if ($stmt->execute()) {
        header('location: ../Front-End/listagemFront.php?status=atualizado');
        exit();
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }

?>