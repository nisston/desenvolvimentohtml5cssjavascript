<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'bdrestaurante';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die(json_encode(['erro' => 'Falha na conexão']));
}
?>
