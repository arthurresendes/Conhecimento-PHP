<?php
    require_once 'connection.php';

    session_start();
    if(!isset($_SESSION['logado'])){
        header('location: login.html');
        exit();
    }
    $nome = $_POST['nomeAnimal'];
    $especie = $_POST['especieAnimal'];
    $idade = $_POST['idadeAnimal'];
    $nomeTutor = $_POST['nomeTutor'];
    $cpf =  $_POST['cpfTutor'];
    $email = $_POST['emailTutor'];

    // 3. Inseri MySQL
    $sql = "INSERT INTO Animais (nome, especie,idade,nomeTutor,cpf,email) VALUES (?, ?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssisss", $nome, $especie, $idade, $nomeTutor, $cpf, $email);

    if ($stmt->execute()) {
        header('location: ../Front-End/listagemFront.php');
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
?>