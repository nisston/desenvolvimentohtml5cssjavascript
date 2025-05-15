<?php
header('Content-Type: application/json');
include 'conexao.php';

$sql = "SELECT * FROM Clientes";
$result = $conn->query($sql);

$clientes = [];
while ($row = $result->fetch_assoc()) {
    $clientes[] = $row;
}

echo json_encode($clientes);
?>