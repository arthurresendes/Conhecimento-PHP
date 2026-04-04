<?php
    require_once 'connection.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM Animais WHERE id =" . $id;
    $result = mysqli_query($conn, $sql);
    header('location: ../Front-End/listagemFront.php');
    exit();
?>