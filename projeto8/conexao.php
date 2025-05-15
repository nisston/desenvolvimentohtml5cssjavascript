<?php
$host = 'localhost';         // geralmente localhost
$usuario = 'root';           // usuário padrão no XAMPP/WAMP
$senha = '';                 // senha padrão geralmente vazia
$banco = 'bdrestaurante'; // nome do banco de dados

// Conexão com o MySQL
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
