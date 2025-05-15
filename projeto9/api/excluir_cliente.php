<?php
header('Content-Type: application/json');
include 'conexao.php';

$data = json_decode(file_get_contents("php://input"), true);
$id = $data['ID'];

$sql = "DELETE FROM Clientes WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode(['mensagem' => 'Cliente excluído com sucesso']);
} else {
    echo json_encode(['erro' => 'Erro ao excluir cliente']);
}
?>
