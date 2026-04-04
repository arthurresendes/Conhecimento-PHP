<?php
    session_start();
    if(!isset($_SESSION['logado'])){
        header('location: login.html');
        exit();
    }
    require_once 'connection.php';

    $sql = "SELECT id, nome, especie,idade,nomeTutor,email FROM Animais";
    $result = mysqli_query($conn, $sql);

    $conn->close();
?>