<?php
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$conn = new mysqli(
    $_ENV['DB_HOST'],
    $_ENV['DB_USER'],
    $_ENV['DB_PASS'],
    $_ENV['DB_NAME'],
    $_ENV['DB_PORT']
);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
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
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>