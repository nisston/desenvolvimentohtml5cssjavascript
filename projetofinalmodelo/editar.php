<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$usuario = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <h1>Editar Usuário</h1>

    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
        <label>
            Nome:
            <input type="text" name="nome" value="<?= $usuario['nome'] ?>" required>
        </label>
        <label>
            Email:
            <input type="email" name="email" value="<?= $usuario['email'] ?>" required>
        </label>
        <button type="submit"><i class="fas fa-save"></i> Atualizar</button>
    </form>

    <br>
    <a href="index.php" class="voltar"><i class="fas fa-arrow-left"></i> Voltar para a lista</a>
</body>
</html>
