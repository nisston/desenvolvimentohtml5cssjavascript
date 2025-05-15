<?php
header('Content-Type: application/json');
include 'conexao.php';

$data = json_decode(file_get_contents("php://input"), true);

$nome = $data['Nome'];
$email = $data['Email'];

$sql = "INSERT INTO Clientes (Nome, Email) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nome, $email);

if ($stmt->execute()) {
    echo json_encode(['mensagem' => 'Cliente adicionado com sucesso']);
} else {
    echo json_encode(['erro' => 'Erro ao adicionar cliente']);
}
?>