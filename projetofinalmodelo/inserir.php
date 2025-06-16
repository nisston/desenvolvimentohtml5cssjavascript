<?php
include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios (nome, email) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nome, $email);
$stmt->execute();

header("Location: index.php");
?>
